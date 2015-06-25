<?php
App::uses('AppModel', 'Model');
/**
 * EocSummaryCr Model
 *
 * @property District $District
 * @property HealthCentre $HealthCentre
 */
class EocSummaryMc extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $actsAs = array('Containable');
	public $displayField = 'health_centre_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'District' => array(
			'className' => 'District',
			'foreignKey' => 'district',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'HealthCentre' => array(
			'className' => 'HealthCentre',
			'foreignKey' => 'health_centre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
