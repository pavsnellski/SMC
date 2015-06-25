<?php
App::uses('AppModel', 'Model');
/**
 * DistrictTally Model
 *
 * @property HealthCentre $HealthCentre
 */
class DistrictTally extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hc';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'HealthCentre' => array(
			'className' => 'HealthCentre',
			'foreignKey' => 'health_centre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $validate = array(
	'sheet_number'=>array(
				'rule' => 'Numeric',
                'required' => true,
                'message' => 'Numbers only'
	)
	
	
	
	);
}
