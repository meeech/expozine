<?php
App::import('Sanitize');
class ExhibitorsController extends AppController {

	var $name = 'Exhibitors';

    var $components = array('Email');

    var $paginate = array('limit'=>100);

    /**
     * undocumented function
     *
     * @return void
     **/
    function beforeFilter() {
        $this->Auth->allow(array('all', 'register', 'success'));
        parent::beforeFilter();
    }

	function index() {
		$this->Exhibitor->recursive = 0;
  
		$this->set('exhibitors', $this->paginate());
		
		$this->Session->write('last.Exhibitor', $this->passedArgs);

	}

    function all($limit = false) {
        return $this->Exhibitor->find('all', array(
            'order' => 'title ASC', 'limit'=>$limit,
            'conditions' =>array('verified'=> 1)
        ));
    }


    /**
     * Register controller for exhibitors to sign up. 
     *
     * @return void
     **/
	function register() {
	    
        $this->layout = 'front_end';
	    
		if (!empty($this->data)) {
		    
		    $this->data = Sanitize::clean($this->data);
		    
			$this->Exhibitor->create();
			if ($this->Exhibitor->save($this->data)) {
                // $this->Session->setFlash(__('The exhibitor has been saved', true));
                $this->Session->write('exhibitor_id', $this->Exhibitor->id);
                $this->redirect(array('action' => 'success', 'language'=>$this->requestLanguage));
			} else {
				$this->Session->setFlash(__('There seems to be a problem. Please review the form and try again.', true));
			}
		}
		$years = $this->Exhibitor->Year->find('list');
		$this->set(compact('years'));
	}


    /**
     * undocumented function
     *
     * @return void
     **/
    function success() {
        $this->layout = 'front_end';

        $exhibitor = false;
        if($this->Session->read('exhibitor_id')) {
            $exhibitor = $this->Exhibitor->read(null, $this->Session->read('exhibitor_id'));
        }

        $this->set(compact('exhibitor'));
    }


	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid exhibitor', true));
			$this->redirect(array('controller'=> 'exhibitors', 'action' => 'index', 'language'=>$this->requestLanguage));
		}
		$this->set('exhibitor', $this->Exhibitor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Exhibitor->create();
			if ($this->Exhibitor->save($this->data)) {
				$this->Session->setFlash(__('The exhibitor has been saved', true));
				$this->redirect(array('controller'=> 'exhibitors', 'action' => 'index', 'language'=>$this->requestLanguage));
			} else {
				$this->Session->setFlash(__('The exhibitor could not be saved. Please, try again.', true));
			}
		}
		$years = $this->Exhibitor->Year->find('list');
		$this->set(compact('years'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid exhibitor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Exhibitor->save($this->data)) {
				$this->Session->setFlash(__('The exhibitor has been saved', true));
				$redir = array('controller'=> 'exhibitors', 'action' => 'index', 'language'=>$this->requestLanguage);
                if($this->Session->read('last.Exhibitor')) {
                    $redir = $redir+$this->Session->read('last.Exhibitor');
                }

                $this->sendConfirmationEmail($this->Exhibitor->read());

				$this->redirect($redir);
			} else {
				$this->Session->setFlash(__('The exhibitor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Exhibitor->read(null, $id);
		}
		$years = $this->Exhibitor->Year->find('list');
		$this->set(compact('years'));
	}


	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for exhibitor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Exhibitor->delete($id)) {
			$this->Session->setFlash(__('Exhibitor deleted', true));
			$this->redirect(array('controller'=> 'exhibitors', 'action' => 'index', 'language'=>$this->requestLanguage));
		}
		$this->Session->setFlash(__('Exhibitor was not deleted', true));
		$this->redirect(array('controller'=> 'exhibitors', 'action' => 'index', 'language'=>$this->requestLanguage));
	}


    /**
     * Call to tear through list and send emails
     *
     * @return void
     **/
    function sendAllConfirmationEmails() {
        $this->autoRender = false;

        $exhibitors = $this->Exhibitor->find('all', array(
            'recursive'=>-1, 
            'conditions'=>array('confirmation_email' => 0, 'verified'=>1)
        ));

        foreach ($exhibitors as $exhibitor) {
            $this->sendConfirmationEmail($exhibitor);
        }
    }

    /**
     * Check if the exhibitor should receive the confirmation email
     * based on verified status, whether its been sent already.
     *
     * @param array exhibitor data
     * @return bool
     **/
    function sendConfirmationEmail($exhibitor) {
        if(Configure::read('debug') > 0) {
            return true;
        } 

        //Not verified, or confirmation email already sent, then dont do anything.
        if(!(bool)$exhibitor['Exhibitor']['verified'] || (bool)$exhibitor['Exhibitor']['confirmation_email']) {
            return true;
        }

        $this->Email->reset();

        $this->set('exhibitor', $this->Exhibitor->read());

        //Set locale to the exhibitor lang
        $this->initLanguage($exhibitor['Exhibitor']['lang']);

        $this->Email->to =  html_entity_decode($exhibitor['Exhibitor']['contact'], ENT_NOQUOTES, 'UTF-8') . ' <' . $exhibitor['Exhibitor']['email'] . '>';
        $this->Email->from = 'Expozine <expozine@archivemontreal.org>';
        $this->Email->replyTo = 'Expozine <expozine@archivemontreal.org>';
        $this->Email->return = 'Expozine <expozine@archivemontreal.org>';

        $this->Email->subject = __d('email', 'subject_confirmation', true);
        $this->Email->template = $exhibitor['Exhibitor']['lang'].'/confirmation';
        $this->Email->sendAs = 'html';

        $this->Exhibitor->id = $exhibitor['Exhibitor']['id'];
        $this->Exhibitor->saveField('confirmation_email', $this->Email->send());

    }
}
