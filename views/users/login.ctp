<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User', array('url'=>array('language'=> $lang, 'action' => 'login')));
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->end('Login');
?>