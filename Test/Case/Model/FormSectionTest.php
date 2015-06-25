<?php
App::uses('FormSection', 'Model');

/**
 * FormSection Test Case
 *
 */
class FormSectionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.form_section',
		'app.form',
		'app.managing_group',
		'app.form_section_variable'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormSection = ClassRegistry::init('FormSection');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormSection);

		parent::tearDown();
	}

}
