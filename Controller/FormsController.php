<?php
App::uses('AppController', 'Controller');
/**
 * Forms Controller
 *
 * @property Form $Form
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FormsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	public $actsAs = array('Containable');
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		//$this->Form->recursive = 0;
		//debug($this->viewVars['user']['country_id']);
		//debug($this->Form->find('all'));
		$options = array('conditions'=>array('country_id'=>$this->viewVars['user']['country_id']));
		$this->set('forms', $this->Form->find('all', $options),$this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->Form->exists($id)) {
			throw new NotFoundException(__('Invalid form'));
		}
		$this->Form->recursive = 2;
		$options = array('conditions' => array('Form.' . $this->Form->primaryKey => $id), 'contains'=>array('FormSection'=>array('fields'=>array('id', 'form_id', 'title', 'section_order'),'FormSectionVariable'=>array('fields'=>array('id', 'title', 'label_english', 'label_french', 'form_section_id', 'variable_order', 'created', 'modified', 'var_type', 'codelist_id')))));
		$this->set('form', $this->Form->find('first', $options));

		//debug($options);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Form->create();
			if ($this->Form->save($this->request->data)) {
				$this->Session->setFlash(__('The form has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form could not be saved. Please, try again.'));
			}
		}
		$managingGroups = $this->Form->ManagingGroup->find('list');
		$this->set(compact('managingGroups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Form->exists($id)) {
			throw new NotFoundException(__('Invalid form'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Form->save($this->request->data)) {
				$this->Session->setFlash(__('The form has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The form could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Form.' . $this->Form->primaryKey => $id));
			$this->request->data = $this->Form->find('first', $options);
		}
		$managingGroups = $this->Form->ManagingGroup->find('list');
		$this->set(compact('managingGroups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Form->id = $id;
		if (!$this->Form->exists()) {
			throw new NotFoundException(__('Invalid form'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Form->delete()) {
			$this->Session->setFlash(__('The form has been deleted.'));
		} else {
			$this->Session->setFlash(__('The form could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
