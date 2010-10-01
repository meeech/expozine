<?php
class ExhibitorsController extends AppController {

	var $name = 'Exhibitors';

    /**
     * undocumented function
     *
     * @return void
     **/
    function beforeFilter() {
        $this->Auth->allow(array('register', 'success'));
        parent::beforeFilter();
    }

	function index() {
		$this->Exhibitor->recursive = 0;
		$this->set('exhibitors', $this->paginate());
	}

    /**
     * Register controller for exhibitors to sign up. 
     *
     * @return void
     **/
	function register() {
	    
        $this->layout = 'front_end';
	    
		if (!empty($this->data)) {
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
			$this->redirect(array('action' => 'index'));
		}
		$this->set('exhibitor', $this->Exhibitor->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Exhibitor->create();
			if ($this->Exhibitor->save($this->data)) {
				$this->Session->setFlash(__('The exhibitor has been saved', true));
				$this->redirect(array('action' => 'index'));
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
				$this->redirect(array('action' => 'index'));
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
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Exhibitor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
