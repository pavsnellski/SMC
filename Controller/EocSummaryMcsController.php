<?php
App::uses('AppController', 'Controller');
/**
 * EocSummaryMcs Controller
 *
 * @property EocSummaryMc $EocSummaryMc
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EocSummaryMcsController extends AppController {

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
		$this->EocSummaryMc->recursive = 0;
		$this->set('eocSummaryMcs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EocSummaryMc->exists($id)) {
			throw new NotFoundException(__('Invalid eoc summary mc'));
		}
		$options = array('conditions' => array('EocSummaryMc.' . $this->EocSummaryMc->primaryKey => $id));
		$this->set('eocSummaryMc', $this->EocSummaryMc->find('first', $options));
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
		//language setting
		$lang_det = $this->viewVars['user']['Language']['id'];
		if(!empty($lang_det)){
            if($lang_det == 1){
                $this->Session->write('Config.language', 'en');
            }
 
            else {
                $this->Session->write('Config.language', 'fr');
            }
 
        }
		$id_d= 3 ;//using this to set district as a test, will need to pick up from database
		
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
		
		
		
		if ($this->request->is('post')) {
			$this->EocSummaryMc->create();
			if ($this->EocSummaryMc->save($this->request->data)) {
				$this->Session->setFlash(__('The eoc summary mc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eoc summary mc could not be saved. Please, try again.'));
			}
		}
		$districts = $this->EocSummaryMc->District->find('list');
		$healthCentres = $this->EocSummaryMc->HealthCentre->find('list');
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
		if (!$this->EocSummaryMc->exists($id)) {
			throw new NotFoundException(__('Invalid eoc summary mc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EocSummaryMc->save($this->request->data)) {
				$this->Session->setFlash(__('The eoc summary mc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eoc summary mc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EocSummaryMc.' . $this->EocSummaryMc->primaryKey => $id));
			$this->request->data = $this->EocSummaryMc->find('first', $options);
		}
		$districts = $this->EocSummaryMc->District->find('list');
		$healthCentres = $this->EocSummaryMc->HealthCentre->find('list');
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
		$this->EocSummaryMc->id = $id;
		if (!$this->EocSummaryMc->exists()) {
			throw new NotFoundException(__('Invalid eoc summary mc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EocSummaryMc->delete()) {
			$this->Session->setFlash(__('The eoc summary mc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eoc summary mc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
