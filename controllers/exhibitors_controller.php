<?php
class ExhibitorsController extends AppController {

	var $name = 'Exhibitors';

	function index() {
		$this->Exhibitor->recursive = 0;
		$this->set('exhibitors', $this->paginate());
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
?>