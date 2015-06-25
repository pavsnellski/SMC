<?php
App::uses('AppModel', 'Model');
/**
 * DailyTalliesMc Model
 *
 */
class DailyTalliesMc extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'daily_tallies_mc';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'hf';
	
		public $belongsTo = array(
		'HealthCentre' => array(
			'className' => 'HealthCentre',
			'foreignKey' => 'health_centre_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
