<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {

    var $components = array('Auth','Session', 'Security', 'DebugKit.Toolbar', 'LanguageGuess');

	/**
	 * Available languages
	 * key is used for locale, value for the global $lang/urls 
	 * If no language is specified, defaults to first language in array.
	 *
	 * @var array
	 */
    public $languages = array(
        'eng'=>'en',
        'fre'=>'fr', 
        // 'ger'=>'de', 
        // 'spa'=>'es'
    );

    /**
     * Set in the beforeFilter.                                                     
     * Gives all controllers access to a  convenient spot for the request language. 
     *
     * @var string
     */    
    public $requestLanguage = null;


    function beforeFilter() {
        //Set up the current year for all to use        
        $this->set('currentYear', ClassRegistry::init('Year')->currentYear());

        $this->initLanguage();
        
        $this->Auth->loginAction = array(
            'controller' => 'users',
            'action' => 'login',
            'language' => $this->requestLanguage
        );

        $this->Auth->loginRedirect = array('language'=> $this->requestLanguage, 'controller' => 'exhibitors', 'action' => 'index');
        $this->Auth->fields = array(
            'username' => 'email',
            'password' => 'password'
        );
       
    }

	/**
	 * Just setup variety of lang related stuff. requestLanguage, Config.language
	 * We can also call this from the app_error functions to init lang / locale
	 *
	 * @return void
	 **/
	function initLanguage() {
        //Set default
        $reqLang = reset($this->languages);

        //If there's no lang set, guess.
        if(!isset($this->params['language'])) {
            // $this->params['language'] = $this->LanguageGuess->guess();
            $this->redirect('/'.$this->LanguageGuess->guess());
        }

        //Check if one came through, and its on the list.
        if( isset($this->params['language']) && in_array($this->params['language'], $this->languages) ) {
            $reqLang = $this->params['language']; 
        }

        //And figure out the locale lang. 
        //Use $this->languages array key for the current lang
        $localeLang = array_search($reqLang, $this->languages);

        $this->requestLanguage = $reqLang;
        Configure::write('Config.language', $localeLang);
        
        //We need this accessible for generating the 'alternate' links/ lang switcher around the site
        $this->set('site_languages', $this->languages);
        $altlang = ('en' == $reqLang) ? 'fr' : 'en' ;
        $this->set('altlang', $altlang );
        $this->set('lang', $reqLang);
	}





}
