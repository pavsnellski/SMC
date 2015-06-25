<?php
App::uses('AppModel', 'Model');
/**
 * FormSectionVariable Model
 *
 * @property FormSection $FormSection
 * @property Codelist $Codelist
 */
class FormSectionVariable extends AppModel {

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
		'FormSection' => array(
			'className' => 'FormSection',
			'foreignKey' => 'form_section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
