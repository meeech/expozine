<?php
class UsersController extends AppController {

	var $name = 'Users';
    var $scaffold;

    /**
     * Dashboard after login
     *
     * @return void
     **/
    function dashboard() {
        
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
