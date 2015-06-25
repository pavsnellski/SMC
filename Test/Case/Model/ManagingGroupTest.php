<?php
App::uses('ManagingGroup', 'Model');

/**
 * ManagingGroup Test Case
 *
 */
class ManagingGroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.managing_group',
		'app.country',
		'app.language',
		'app.user',
		'app.role',
		'app.region',
		'app.form',
		'app.form_section',
		'app.form_section_variable'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ManagingGroup = ClassRegistry::init('ManagingGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ManagingGroup);

		parent::tearDown();
	}

}
