<?php
// app/Controller/UsersController.php
class UsersController extends AppController {

 public $components = array(
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
			'authorize' => array('Controller') // Added this line
        )
    );
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


	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add'); // Letting users register themselves
	}

	public function login() {
		//debug($this->request);
		
		if ($this->request->is('post')) {
		//$this->set('agree',$this->data->User['agree']); 
		//debug($agree);
		//debug($this->data->user['agree']);
		$data = $this->data;
		//debug($data);
		//$agree = $data['User']['agree'];
		//debug($this);


			if ($this->Auth->login()) {			
				$this->redirect(array('controller' => 'users', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}

		}
	}

	public function logout() {
		$this->Session->delete('User');
		$this->redirect($this->Auth->logout());
	}
    public function index() {
	 //debug(substr(sprintf('%o', fileperms('output/1')), -4));
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

    public function edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
	
	public function list_download($id=null){
		$this->User->id = $id;
		
		$this->set('user_list', $this->User->find('first',array(
										'conditions' => array('id' => $id),
										//'contain' => array('Individual','ProjectLocation','ProjectDocument' => array('ProjectDocumentSection' => array('ProjectDocumentSectionVariable' => array('Codeset' =>array('Code'))))))));
										'contain' => array('UserSession' => array('UserSessionDownload'=>array('ProjectDataset'))))));
										//debug($this->user_list);
										//exit;
	}
	
	public function retrieve_download($id=null) {
	
	if($this->params->named['user_id']==$this->viewVars['user']['id']){
	
	$this->loadModel('ProjectDataset');
	$filename = $this->ProjectDataset->get_filename($this->params->named['project_dataset_id']);
	$filestring = "output/" . $this->params->named['user_id'] . "/" . $this->params->named['id']."_export_". $this->params->named['project_dataset_id']."_".$this->params->named['download_time'].".csv"; 
	//$filestring = "HTTP://localhost/output/" . $this->params->named['user_id'] . "/" .          $this->params->named['id']."_export_". $this->params->named['project_dataset_id']."_".$this->params->named['download_time'].".csv"; 
	//debug($filestring);
			header('Content-Type: text/plain');
			//header('Content-Disposition: attachment; filename="dataset.csv"');
			header("Content-Disposition: attachment; filename=\"". substr($filename,0,strlen($filename)-4) ."_".$this->params->named['download_time'].".".substr($filename,-3)."\"");
			
			echo file_get_contents($filestring);
			exit();
	}
	else
	{
		echo "User ID mismatch";
		$this->redirect($this->referer());
	}
}
}