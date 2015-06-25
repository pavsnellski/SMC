<?php
App::uses('AppController', 'Controller');
/**
 * DailyTalliesMcs Controller
 *
 * @property DailyTalliesMc $DailyTalliesMc
 * @property PaginatorComponent $Paginator
 */
class DailyTalliesMcsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DailyTalliesMc->recursive = 0;
		$this->set('dailyTalliesMcs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DailyTalliesMc->exists($id)) {
			throw new NotFoundException(__('Invalid daily tallies mc'));
		}
		$options = array('conditions' => array('DailyTalliesMc.' . $this->DailyTalliesMc->primaryKey => $id));
		$this->set('dailyTalliesMc', $this->DailyTalliesMc->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		
	$this->loadModel('Form');
	$this->loadModel('CodelistCode');
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
		//debug($id);
		//$id=3; // this used to identify form, will need to be set dynamically
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
		
		if ($this->request->is('post')) {
			
			//$distdate= $this->data['DistrictTally']['dist_date']['year']."-".$this->data['DistrictTally']['dist_date']['month']."-".$this->data['DistrictTally']['dist_date']['day'];
			
			$check_exists = $this->DailyTalliesMc->find('first',array('conditions'=>array('tally_sheet'=>$this->data['DailyTalliesMc']['tally_sheet'], 'health_centre_id'=>$this->data['DailyTalliesMc']['health_centre_id'])));
			if($check_exists){
				$this->Session->setFlash(__('The district tally could not be saved as a record already exists. Please, try again.'));
			}
			else
			{			
			$this->DailyTalliesMc->create();
			if ($this->DailyTalliesMc->save($this->request->data)) {
				$this->Session->setFlash(__('The daily tallies mc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The daily tallies mc could not be saved. Please, try again.'));
			}
		}
		}

		$healthCentres = $this->DailyTalliesMc->HealthCentre->find('list');
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
		if (!$this->DailyTalliesMc->exists($id)) {
			throw new NotFoundException(__('Invalid daily tallies mc'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DailyTalliesMc->save($this->request->data)) {
				$this->Session->setFlash(__('The daily tallies mc has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The daily tallies mc could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DailyTalliesMc.' . $this->DailyTalliesMc->primaryKey => $id));
			$this->request->data = $this->DailyTalliesMc->find('first', $options);
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
		$this->DailyTalliesMc->id = $id;
		if (!$this->DailyTalliesMc->exists()) {
			throw new NotFoundException(__('Invalid daily tallies mc'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DailyTalliesMc->delete()) {
			$this->Session->setFlash(__('The daily tallies mc has been deleted.'));
		} else {
			$this->Session->setFlash(__('The daily tallies mc could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
