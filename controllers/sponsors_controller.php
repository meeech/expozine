<?php
class SponsorsController extends AppController {

	var $name = 'Sponsors';

   var $components = array('Upload');

	function index() {
		$this->Sponsor->recursive = 0;
		$this->set('sponsors', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sponsor', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('sponsor', $this->Sponsor->read(null, $id));
	}

	function add() {

		if (!empty($this->data)) {
			$this->Sponsor->create();
            $this->data['Sponsor']['id'] = String::uuid();

            foreach ($this->Sponsor->imageFields as $imageFieldName) {
                 $imageName = $this->Upload->process($this->data['Sponsor'], array(
                     'destination'=>'img/sponsors/'.$this->data['Sponsor']['id'].'/',
                     'uploadField' => $imageFieldName.'_file',
                     'realField'=>$imageFieldName
                ));
                if($imageName) {
                    $this->data['Sponsor'][$imageFieldName] = $imageName;
                }
                // unset($this->data['Sponsor'][$imageFieldName.'_file']);
            }

			if ($this->Sponsor->save($this->data)) {
				$this->Session->setFlash(__('The sponsor has been saved', true));
				$this->redirect(array('language'=>$this->requestLanguage, 'controller'=>'sponsors', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sponsor could not be saved. Please, try again.', true));
			}
		}
		$years = $this->Sponsor->Year->find('list');
		$this->set(compact('years'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sponsor', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {

            // foreach ($this->Sponsor->imageFields as $imageFieldName) {
            //     $imageName = $this->Upload->process($this->data['Sponsor'], array('destination'=>'img/sponsors/'.$this->data['Sponsor']['id'].'/'));
            //                 if($imageName) {
            //                     $this->data['Sponsor'][$imageFieldName] = $imageName;
            //                 }
            // }
		    
		    
			if ($this->Sponsor->save($this->data)) {
				$this->Session->setFlash(__('The sponsor has been saved', true));
				$this->redirect(array('language'=>$this->requestLanguage, 'controller'=>'sponsors', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sponsor could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sponsor->read(null, $id);
		}
		$years = $this->Sponsor->Year->find('list');
		$this->set(compact('years'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sponsor', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sponsor->delete($id)) {
			$this->Session->setFlash(__('Sponsor deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sponsor was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>