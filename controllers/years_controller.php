<?php
class YearsController extends AppController {

	var $name = 'Years';

	function index() {
		$this->Year->recursive = 0;
		$this->set('years', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid year', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('year', $this->Year->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Year->create();
			if ($this->Year->save($this->data)) {
				$this->Session->setFlash(__('The year has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The year could not be saved. Please, try again.', true));
			}
		}
		$sponsors = $this->Year->Sponsor->find('list');
		$this->set(compact('sponsors'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid year', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Year->save($this->data)) {
				$this->Session->setFlash(__('The year has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The year could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Year->read(null, $id);
		}
		$sponsors = $this->Year->Sponsor->find('list');
		$this->set(compact('sponsors'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for year', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Year->delete($id)) {
			$this->Session->setFlash(__('Year deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Year was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>