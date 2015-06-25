<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
/* 	public $components = array('Paginator', 'Session'
	,'Auth' => array(
            'loginRedirect' => array('action' => 'index'),
            'logoutRedirect' => array('action' => 'login'),
			'authorize' => array('Controller') // Added this line
        )
	); */
	
	public function isAuthorized($user) {
    // Admin can access every action
    if (isset($user['role']) && $user['role'] === 'admin') {
        return true;
    }
	if ($this->action === 'list_download') {
        return true;
    }
	if ($this->action === 'retrieve_download') {
        return true;
    }
    // Default deny
    return false;
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	
	/**
 * login method
 *
 */
	public function login() {
	//debug($this->request);
	
	if ($this->request->is('post')) {
	//$this->set('agree',$this->data->User['agree']); 
	//debug($this->data);
	//debug($this->data->user['agree']);
	$data = $this->data;
	//debug($data);
	//debug($this->Auth);

		//if (1==1) {
			//debug($this->Auth->login());
		if ($this->Auth->login()) {			
			$this->Session->delete('UserProfile');
			//debug($this->viewVars['user']);
			//debug($this->Session->check('UserProfile.SessionCreated'));

			$this->Session->write('UserProfile.id',$this->viewVars['user']['id']);
			$this->Session->write('UserProfile.language_id',$this->viewVars['user']['language_id']);
			$this->Session->write('UserProfile.language_id',$this->viewVars['user']['language_id']);
			$this->Session->write('UserProfile.country_id',$this->viewVars['user']['country_id']);
			$this->Session->write('UserProfile.role_id',$this->viewVars['user']['role_id']);
			$this->redirect(array('controller'=>'forms','action' => 'index'));
			//debug($this->Session->read('UserProfile'));

		} else {
			$this->Session->setFlash(__('Invalid username or password, try again'));
		}

	}
}
	/**
 * logout method
 *
 */

	public function logout() {
		$this->Session->delete('User');
		$this->redirect($this->Auth->logout());
	}
	
	
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
