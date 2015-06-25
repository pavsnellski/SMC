<?php
App::uses('FormSectionVariable', 'Model');

/**
 * FormSectionVariable Test Case
 *
 */
class FormSectionVariableTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.form_section_variable',
		'app.form_section',
		'app.form',
		'app.managing_group',
		'app.codelist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->FormSectionVariable = ClassRegistry::init('FormSectionVariable');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->FormSectionVariable);

		parent::tearDown();
	}

}
