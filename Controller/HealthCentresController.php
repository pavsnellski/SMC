<?php
App::uses('AppController', 'Controller');
/**
 * HealthCentres Controller
 *
 * @property HealthCentre $HealthCentre
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HealthCentresController extends AppController {

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
		$this->HealthCentre->recursive = 0;
		$this->set('healthCentres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HealthCentre->exists($id)) {
			throw new NotFoundException(__('Invalid health centre'));
		}
		$options = array('conditions' => array('HealthCentre.' . $this->HealthCentre->primaryKey => $id));
		$this->set('healthCentre', $this->HealthCentre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HealthCentre->create();
			if ($this->HealthCentre->save($this->request->data)) {
				$this->Session->setFlash(__('The health centre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The health centre could not be saved. Please, try again.'));
			}
		}
		$districts = $this->HealthCentre->District->find('list');
		$this->set(compact('districts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HealthCentre->exists($id)) {
			throw new NotFoundException(__('Invalid health centre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HealthCentre->save($this->request->data)) {
				$this->Session->setFlash(__('The health centre has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The health centre could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HealthCentre.' . $this->HealthCentre->primaryKey => $id));
			$this->request->data = $this->HealthCentre->find('first', $options);
		}
		$districts = $this->HealthCentre->District->find('list');
		$this->set(compact('districts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HealthCentre->id = $id;
		if (!$this->HealthCentre->exists()) {
			throw new NotFoundException(__('Invalid health centre'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->HealthCentre->delete()) {
			$this->Session->setFlash(__('The health centre has been deleted.'));
		} else {
			$this->Session->setFlash(__('The health centre could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
