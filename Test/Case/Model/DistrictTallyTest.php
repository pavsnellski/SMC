<?php
App::uses('DistrictTally', 'Model');

/**
 * DistrictTally Test Case
 *
 */
class DistrictTallyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.district_tally',
		'app.health_centre',
		'app.district',
		'app.region'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DistrictTally = ClassRegistry::init('DistrictTally');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DistrictTally);

		parent::tearDown();
	}

}
