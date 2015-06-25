<?php
App::uses('AppController', 'Controller');
/**
 * FormSectionVariables Controller
 *
 * @property FormSectionVariable $FormSectionVariable
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FormSectionVariablesController extends AppController {

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
		$this->FormSectionVariable->recursive = 0;
		$this->set('formSectionVariables', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FormSectionVariable->exists($id)) {
			throw new NotFoundException(__('Invalid form section variable'));
		}
		$options = array('conditions' => array('FormSectionVariable.' . $this->FormSectionVariable->primaryKey => $id));
		$this->set('formSectionVariable', $this->FormSectionVariable->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FormSectionVariable->create();
			if ($this->FormSectionVariable->save($this->request->data)) {
				$this->Session->setFlash(__('The form section variable has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form section variable could not be saved. Please, try again.'));
			}
		}
		$formSections = $this->FormSectionVariable->FormSection->find('list');
		$codelists = $this->FormSectionVariable->Codelist->find('list');
		$this->set(compact('formSections', 'codelists'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FormSectionVariable->exists($id)) {
			throw new NotFoundException(__('Invalid form section variable'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FormSectionVariable->save($this->request->data)) {
				$this->Session->setFlash(__('The form section variable has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form section variable could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('FormSectionVariable.' . $this->FormSectionVariable->primaryKey => $id));
			$this->request->data = $this->FormSectionVariable->find('first', $options);
		}
		$formSections = $this->FormSectionVariable->FormSection->find('list');
		$codelists = $this->FormSectionVariable->Codelist->find('list');
		$this->set(compact('formSections', 'codelists'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FormSectionVariable->id = $id;
		if (!$this->FormSectionVariable->exists()) {
			throw new NotFoundException(__('Invalid form section variable'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->FormSectionVariable->delete()) {
			$this->Session->setFlash(__('The form section variable has been deleted.'));
		} else {
			$this->Session->setFlash(__('The form section variable could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
