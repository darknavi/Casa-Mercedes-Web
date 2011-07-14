<?php
class AlbergadosController extends AppController {

	var $name = 'Albergados';
        var $helpers = array('Html','Javascript', 'Ajax');

	function index() {
		$this->Albergado->recursive = 0;
		$this->set('albergados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('albergado', $this->Albergado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Albergado->create();
			if ($this->Albergado->save($this->data)) {
				$this->Session->setFlash(__('The albergado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
			}
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$this->set(compact('personas', 'casas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Albergado->save($this->data)) {
				$this->Session->setFlash(__('The albergado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Albergado->read(null, $id);
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$this->set(compact('personas', 'casas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for albergado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Albergado->delete($id)) {
			$this->Session->setFlash(__('Albergado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Albergado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
