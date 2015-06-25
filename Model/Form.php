<?php
App::uses('AppModel', 'Model');
/**
 * Form Model
 *
 * @property ManagingGroup $ManagingGroup
 * @property FormSection $FormSection
 */
class Form extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ManagingGroup' => array(
			'className' => 'ManagingGroup',
			'foreignKey' => 'managing_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FormSection' => array(
			'className' => 'FormSection',
			'foreignKey' => 'form_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
