<?php
App::uses('AppController', 'Controller');
/**
 * DistrictTallies Controller
 *
 * @property DistrictTally $DistrictTally
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class DistrictTalliesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');
	//var $uses = array('Form','DistrictTally');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DistrictTally->recursive = 0;
		$this->set('districtTallies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {

		if (!$this->DistrictTally->exists($id)) {
			throw new NotFoundException(__('Invalid district tally'));
		}
		$options = array('conditions' => array('DistrictTally.' . $this->DistrictTally->primaryKey => $id));
		$this->set('districtTally', $this->DistrictTally->find('first', $options));

	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
	//$this->FormVariables = ClassRegistry::init('FormSectionVariable');
	$this->loadModel('Form');
	$this->loadModel('CodelistCode');
	
	//$this->loadModel('User');
	//debug($this->viewVars['user']);
	$this->User = ClassRegistry::init('User');
	
	//set language for cakephp - not working properly, under view 
	$lang_det = $this->viewVars['user']['Language']['id'];
		if(!empty($lang_det)){
            if($lang_det == 1){
                $this->Session->write('Config.language', 'en');
            }
 
            else {
                $this->Session->write('Config.language', 'fr');
            }
 
        }
	
		//$id=1; // this used to identify form, will need to be set dynamically
		$id_d= 3 ;//using this to set district as a test, will need to pick up from database
		
		$options = array('conditions' => array('Form.' . $this->Form->primaryKey => $id), 'contain'=>array('FormSection'=>array('FormSectionVariable'=>array('fields'=>array('id', 'title', 'label_english', 'label_french', 'form_section_id', 'variable_order', 'created', 'modified', 'var_type', 'codelist_id')))));
		$this->set('form', $this->Form->find('first', $options));


		//set array for country and district
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
		
		$this->set('user2', $this->User->find('first', $options2));
		
		//build required code lists
		$options3 = array('fields'=>array('code_value','title'),'conditions'=>array('codelist_id'=>4));
		$strategy = $this->CodelistCode->find('list',$options3);
		$this->set(compact('strategy'));
		//debug($strategy);
		
		$options3 = array('fields'=>array('code_value','title'),'conditions'=>array('codelist_id'=>2));
		$cycle = $this->CodelistCode->find('list',$options3);
		$this->set(compact('cycle'));
		
		$options3 = array('fields'=>array('code_value','title'),'conditions'=>array('codelist_id'=>3));
		$cycleday = $this->CodelistCode->find('list',$options3);
		$this->set(compact('cycleday'));
		
		//create list of districts (probably just one returned)
		$list_districts = $this->User->Country->Region->District->find('list', array('conditions'=>array('id'=>$id_d), 'fields'=>array('id', 'title')));
		$this->set(compact('list_districts'));
		//create list of districts (probably just one returned)
		$list_hcs= $this->User->Country->Region->District->HealthCentre->find('list', array('conditions'=>array('district_id'=>$id_d), 'fields'=>array('id', 'title'),'order'=>array('title'=>'asc')));
		$this->set(compact('list_hcs'));		
		//debug($this->DistrictTally->getLastInsertId());
	//debug($this->FormSectionVariable);
		if ($this->request->is('post')) {
			//add a check to see if current form has already been added
			

			//debug($this->data);
			//debug($this->DistrictTally->find('first'));
			$distdate= $this->data['DistrictTally']['dist_date']['year']."-".$this->data['DistrictTally']['dist_date']['month']."-".$this->data['DistrictTally']['dist_date']['day'];
			
			$check_exists = $this->DistrictTally->find('first',array('conditions'=>array('sheet_number'=>$this->data['DistrictTally']['sheet_number'],'dist_date'=>$distdate, 'health_centre_id'=>$this->data['DistrictTally']['health_centre_id'])));
			if($check_exists){
				//debug($this->DistrictTally->id);
				$this->Session->setFlash(__('The district tally could not be saved as a record already exists. Please, try again.'));
			}
			else
			{
				$this->DistrictTally->create();
			if ($this->DistrictTally->save($this->request->data)) {
				//$this->DistrictTally->id = $this->DistrictTally->getLastInsertId();
				$this->Session->setFlash(__('The district tally has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The district tally could not be saved. Please, try again.'));

			}
			}
			
			
			//end of check
			
		}
		$healthCentres = $this->DistrictTally->HealthCentre->find('list');
		$this->set(compact('healthCentres'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DistrictTally->exists($id)) {
			throw new NotFoundException(__('Invalid district tally'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DistrictTally->save($this->request->data)) {
				$this->Session->setFlash(__('The district tally has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The district tally could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DistrictTally.' . $this->DistrictTally->primaryKey => $id));
			$this->request->data = $this->DistrictTally->find('first', $options);
		}
		$healthCentres = $this->DistrictTally->HealthCentre->find('list');
		$this->set(compact('healthCentres'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DistrictTally->id = $id;
		if (!$this->DistrictTally->exists()) {
			throw new NotFoundException(__('Invalid district tally'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DistrictTally->delete()) {
			$this->Session->setFlash(__('The district tally has been deleted.'));
		} else {
			$this->Session->setFlash(__('The district tally could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
