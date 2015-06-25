<?php
App::uses('HealthCentre', 'Model');

/**
 * HealthCentre Test Case
 *
 */
class HealthCentreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.health_centre',
		'app.district',
		'app.region',
		'app.district_tally'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HealthCentre = ClassRegistry::init('HealthCentre');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HealthCentre);

		parent::tearDown();
	}

}
