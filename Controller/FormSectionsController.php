<?php
App::uses('AppController', 'Controller');
/**
 * FormSections Controller
 *
 * @property FormSection $FormSection
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FormSectionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FormSection->recursive = 0;
		$this->set('formSections', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FormSection->exists($id)) {
			throw new NotFoundException(__('Invalid form section'));
		}
		$options = array('conditions' => array('FormSection.' . $this->FormSection->primaryKey => $id));
		$this->set('formSection', $this->FormSection->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormSection->create();
			if ($this->FormSection->save($this->request->data)) {
				$this->Session->setFlash(__('The form section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form section could not be saved. Please, try again.'));
			}
		}
		$forms = $this->FormSection->Form->find('list');
		$this->set(compact('forms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FormSection->exists($id)) {
			throw new NotFoundException(__('Invalid form section'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FormSection->save($this->request->data)) {
				$this->Session->setFlash(__('The form section has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form section could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FormSection.' . $this->FormSection->primaryKey => $id));
			$this->request->data = $this->FormSection->find('first', $options);
		}
		$forms = $this->FormSection->Form->find('list');
		$this->set(compact('forms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FormSection->id = $id;
		if (!$this->FormSection->exists()) {
			throw new NotFoundException(__('Invalid form section'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FormSection->delete()) {
			$this->Session->setFlash(__('The form section has been deleted.'));
		} else {
			$this->Session->setFlash(__('The form section could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
