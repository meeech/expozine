<?php
class SponsorsYearsController extends AppController {

	var $name = 'SponsorsYears';

	function index() {
		$this->SponsorsYear->recursive = 0;
		$this->set('sponsorsYears', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sponsors year', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sponsorsYear', $this->SponsorsYear->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SponsorsYear->create();
			if ($this->SponsorsYear->save($this->data)) {
				$this->Session->setFlash(__('The sponsors year has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sponsors year could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sponsors year', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SponsorsYear->save($this->data)) {
				$this->Session->setFlash(__('The sponsors year has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sponsors year could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SponsorsYear->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sponsors year', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SponsorsYear->delete($id)) {
			$this->Session->setFlash(__('Sponsors year deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sponsors year was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>