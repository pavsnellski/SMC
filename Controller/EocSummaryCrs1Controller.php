<?php
App::uses('AppController', 'Controller');
/**
 * EocSummaryCrs1s Controller
 *
 * @property EocSummaryCrs1 $EocSummaryCrs1
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EocSummaryCrs1Controller extends AppController {

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
		$this->EocSummaryCrs1s1->recursive = 0;
		$this->set('EocSummaryCrs1s', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EocSummaryCrs1->exists($id)) {
			throw new NotFoundException(__('Invalid eoc summary cr'));
		}
		$options = array('conditions' => array('EocSummaryCrs1.' . $this->EocSummaryCrs1->primaryKey => $id));
		$this->set('EocSummaryCrs1', $this->EocSummaryCrs1->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		$this->loadModel('Form');
		$this->loadModel('User');
		$this->loadModel('CodelistCode');
		//$this->User = ClassRegistry::init('User');
		$lang_det = $this->viewVars['user']['Language']['id'];
		if(!empty($lang_det)){
            if($lang_det == 1){
                $this->Session->write('Config.language', 'en');
            }
 
            else {
                $this->Session->write('Config.language', 'fr');
            }
 
        }
		//debug($this->Session->read('Config.language'));
		//debug($this->EocSummaryCrs1);
		//$id=2; // this used to identify form, will need to be set dynamically
		$id_d= 3 ;//using this to set district as a test, will need to pick up from database
		//$this->Form->recursive=2;
		$options = array('conditions' => array('Form.' . $this->Form->primaryKey => $id), 'contain'=>array('FormSection'=>array('FormSectionVariable'=>array('fields'=>array('id', 'title', 'label_english', 'label_french', 'form_section_id', 'variable_order', 'created', 'modified', 'var_type', 'codelist_id')))));
		$this->set('form', $this->Form->find('first', $options));
		
		// DELETE THESE COMMENTS ONCE COMPLETED
		//$this->User->recursive=-1;
		$options2 = array('conditions' => array('User.' . $this->User->primaryKey => $this->viewVars['user']['id']), 
		'contain'=>array(
						'Country'=>array('fields'=>array('id','title_eng','title_fre')
						,'Region'=>array('fields'=>array('id','country_id','title')
							
						,'District'=>array('fields'=>array('id','region_id','title')
						,'conditions' => array('id'=>$id_d)
						)
						)
						)
					)
				)
			;
			
		//cycle array
		$options3 = array('fields'=>array('code_value','title'),'conditions'=>array('codelist_id'=>2));
		$cycle = $this->CodelistCode->find('list',$options3);
		$this->set(compact('cycle'));
		//debug($options2);
		$this->set('user2', $this->User->find('first', $options2));
		
		//create list of districts (probably just one returned)
		$list_districts = $this->User->Country->Region->District->find('list', array('conditions'=>array('id'=>$id_d), 'fields'=>array('id', 'title')));
		$this->set(compact('list_districts'));
		//create list of districts (probably just one returned)
		$list_hcs= $this->User->Country->Region->District->HealthCentre->find('list', array('conditions'=>array('district_id'=>$id_d), 'fields'=>array('id', 'title'),'order'=>array('title'=>'asc')));
		$this->set(compact('list_hcs'));
		
		
		//$this->set('district_id',$this->user2['Country']['Region']['District']);
		
		if ($this->request->is('post')) {
			$this->EocSummaryCrs1->create();
			if ($this->EocSummaryCrs1->save($this->request->data)) {
				$this->Session->setFlash(__('The eoc summary cr has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eoc summary cr could not be saved. Please, try again.'));
			}
		}
		$districts = $this->EocSummaryCrs1->District->find('list');
		$healthCentres = $this->EocSummaryCrs1->HealthCentre->find('list');
		$this->set(compact('districts', 'healthCentres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EocSummaryCrs1->exists($id)) {
			throw new NotFoundException(__('Invalid eoc summary cr'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EocSummaryCrs1->save($this->request->data)) {
				$this->Session->setFlash(__('The eoc summary cr has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eoc summary cr could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EocSummaryCrs1.' . $this->EocSummaryCrs1->primaryKey => $id));
			$this->request->data = $this->EocSummaryCrs1->find('first', $options);
		}
		$districts = $this->EocSummaryCrs1->District->find('list');
		$healthCentres = $this->EocSummaryCrs1->HealthCentre->find('list');
		$this->set(compact('districts', 'healthCentres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EocSummaryCrs1->id = $id;
		if (!$this->EocSummaryCrs1->exists()) {
			throw new NotFoundException(__('Invalid eoc summary cr'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EocSummaryCrs1->delete()) {
			$this->Session->setFlash(__('The eoc summary cr has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eoc summary cr could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
