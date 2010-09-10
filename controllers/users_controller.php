<?php
class UsersController extends AppController {

	var $name = 'Users';
    var $scaffold;
    
    var $components = array('Auth');

    function beforeFilter() {
        $this->Auth->fields = array(
            'username' => 'email',
            'password' => 'password'
        );
       
    }

    /**
     *  The AuthComponent provides the needed functionality
     *  for login, so you can leave this function blank.
     */
    function login() {

    }

    function logout() {
        $this->redirect($this->Auth->logout());
    }


}
