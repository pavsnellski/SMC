<?php
App::uses('Region', 'Model');

/**
 * Region Test Case
 *
 */
class RegionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.region',
		'app.country',
		'app.language',
		'app.user',
		'app.role',
		'app.managing_group',
		'app.form',
		'app.form_section',
		'app.form_section_variable',
		'app.district',
		'app.health_centre',
		'app.district_tally'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Region = ClassRegistry::init('Region');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Region);

		parent::tearDown();
	}

}
