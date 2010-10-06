<?php
/**
 * Upload Componenet.
 *
 * For when the behaviour isn't enough.
 * We have an upload behavior, but its not well suited for associated data, especially in a hasMany context.
 * 2 choices - either refactor the upload behavior, which isn't that well written in the first place :) (my bad!)
 * or write this upload component to encaps the logic. 
 *
 * Remember - Make sure your forms are set to array('type'=>'file')
 *
 * @package default
 * @require Cake Core File class
 * @author Mitchell Amihod
 **/

App::import('Core', array('File'));

class UploadComponent extends Object {

    var $controller = false;

    //Whitelist of extensions we allow.
    var $extensions = array('jpeg', 'jpg', 'gif', 'png');

    function initialize(&$controller, $settings = array()) {
        $this->controller =& $controller;
    }

    /**
     * Process the upload
     *
     * @param array $item The item to process
     * @param array $options
     * @return string/bool The final filename, or false for failure.
     **/
    function process($item, $options = array()) {
        
        //uploadField - this is where the image is attached to
        //realField - the current value - we can return this if there's no new image.
        //destination - ALWAYS relative to WWW_ROOT. 
        $defaults = array(
            'uploadField' => 'image_file',
            'realField' => 'image',
            'destination' => 'img' //Default to the webroot/img folder.
        );
        $options = array_merge($defaults, $options);
        $uploadField = $options['uploadField'];
        $realField = $options['realField'];
        $destination = WWW_ROOT . $options['destination'];

        //The upload result
        // If nothing sent, field wont exist, return original value.
        if(!isset($item[$uploadField])) {
            return $item[$realField];
        }

        $upload = $item[$uploadField];

        //First Condition: No File uploaded
        //So, we return the realField value
        if(UPLOAD_ERR_NO_FILE === $upload['error']) {
            return $item[$realField];
        }

        //Second, check if any of the other errors are hit?
        //If so, return false.
        //we will work on err messaging at another time. 
        //Its not critical, since right now, client wont have access to uploading.
        if(UPLOAD_ERR_OK !== $upload['error']) {
            $this->_error('Something went wrong with upload. Error no: '. $upload['error']);
            return false;
        }
        
        //Check Extension of file being uploaded is allowed
        if(!$this->_extensionAllowed($upload)) {
            $this->_error('That file extension not allowed.');
            return false;
        }

        //Check if the destination exists, an if not, attempt to make it.
        if(!is_dir($destination) && (false === @mkdir($destination, 0777, true)) ){
            $this->_error('Could not make destination folder.');
            return false;
        }

        return $this->_makeNewFile($upload, $destination);
    }
    
    
    /**
     * Creates the new image.
     * @param array $upload The Upload field
     * @param string $destination Where to put the image
     * @return string/false string is name of image if successful, else false to signify failure. 
     **/
    function _makeNewFile($upload, $destination) {

        $extension = pathinfo($upload['name'],PATHINFO_EXTENSION);
        //For older php version safety, using basename
        $filename = Inflector::slug(basename($upload['name'], $extension));
        $newFile = $destination . DS . $filename.'.'.$extension;

        if (! @move_uploaded_file($upload['tmp_name'], $newFile)){
            $this->_error('Move of ' . $upload['tmp_name'] . ' to ' . $newFile);
            return false;
        }

        return basename($newFile);

    }
    
    /**
     * Handle the error.
     * Right now, passing through to controller->setFlashError, 
     *
     * @param string $msg 
     * @return void
     **/
    function _error($msg) {
        debug($msg);
       // $this->controller->setFlashError($msg);
    }
    
    /**
     * Check if its allowed
     *
     * @return bool
     **/
    function _extensionAllowed($upload) {
        //Check file type allowed
        $uploadInfo = pathinfo($upload['name']);
        if(!in_array(strtolower($uploadInfo['extension']), $this->extensions)){
            return false;
        }
        return true;
    }
    
    
} // END class UploadComponent extends Object
?>