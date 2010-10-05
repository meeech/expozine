<?php
/**
 * Language Guess 
 *
 * Component to add Language Guessing based on browser accept headers capability to a controller. 
 * Moved to a component so it can be available to the Error Handler
 *
 * During initialization, looks for array controller->languages, 
 * and will assign it to $this->languages
 *
 * Credit to http://bakery.cakephp.org/articles/download_code/1361/block/1
 * for the accept header parsing
 *
 * @package default
 * @author Mitchell Amihod
 */
class LanguageGuessComponent extends Object {

    var $controller = false;

    /**
     * Default of allowed languages.
     * Will get overwritten with the value of controller->languages (if it exists);
     *
     * @var array
     **/
    var $languages = array('en','fr', 'de', 'es');

    function initialize(&$controller, $settings = array()) {
        $this->controller =& $controller;
        
        if(isset($controller->languages)) {
            $this->languages = $controller->languages;
        }
    }

    /**
     * Wrapper to trigger the guessing.
     *
     * @return string
     **/
    function guess() {
        $header = env('HTTP_ACCEPT_LANGUAGE');
        //If for some reason browser doesn't provide the accept lang, default to the first one.
        if(!$header) {
            return reset($this->languages);
        }

        //Loop through weighted results from user browser, find first match in our langs array
        $browserLangs = $this->_parseLangHeaders($header);
        
        $lang = false;
        foreach ($browserLangs as $oLang) {
            if(in_array($oLang->language, $this->languages)) {
                $lang = $oLang->language;
                break;
            }
        }

        //Still no luck? Default to first one in $this->languages
        if(false === $lang) {
            $lang = reset($this->languages);
        }

        return $lang;
    }

    /**
     * Parses HTTP Request Language Headers
     * Lifted from http://bakery.cakephp.org/articles/download_code/1361/block/1
     * Some mods made by mitch to fit our needs. 
     * @param string $accept
     * @return array
     */
    function _parseLangHeaders($langHead) {

        $langs = preg_split('/\s*,\s*/i', $langHead, -1, PREG_SPLIT_NO_EMPTY);
        $out = array();
        $i = 0;
        $weightIndex = 1;
        foreach ($langs as $lang) {
            $opts = preg_split('/\s*;\s*/i', $lang, -1, PREG_SPLIT_NO_EMPTY);
            $code = $opts[0];
            $weight = null;
            $codeSegs = explode('-', $code);
            $langCode = strtolower($codeSegs[0]);
            $ctryCode = null;
            if (array_key_exists(1, $codeSegs)) {
                $ctryCode = strtolower($codeSegs[1]);
            }
            if (array_key_exists(1, $opts)) {
                $qParams = explode('=', $opts[1]);
                if ($qParams[0] === 'q') {
                    if (array_key_exists(1, $qParams) && is_numeric($qParams[1])) {
                        $weight = (float)$qParams[1];
                    }
                }
            }
            if ($weight === null) {
                $weight = $weightIndex;
            }
            $out[] = (object)array(
                'language' => $langCode,
                'country' => $ctryCode,
                'weight' => $weight
            );
            $i++;
            if ($weightIndex > 0) {
                $weightIndex -= .1;
            }
        }

        uasort($out, array($this, '_weightSort'));

        return $out;
    }


    /**
     * Sorts request lang code weights. Used by _parseLangHeaders
     *
     * @param object $a
     * @param object $b
     * @return int
     */
    function _weightSort($a, $b) {
        if ($a->weight === $b->weight) {
            return 0;
        }
        elseif ($a->weight > $b->weight) {
            return -1;
        }
        else {
            return 1;
        }
    }




}