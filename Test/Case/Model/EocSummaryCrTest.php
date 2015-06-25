<?php
App::uses('EocSummaryCr', 'Model');

/**
 * EocSummaryCr Test Case
 *
 */
class EocSummaryCrTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.eoc_summary_cr',
		'app.district',
		'app.region',
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
		$this->EocSummaryCr = ClassRegistry::init('EocSummaryCr');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EocSummaryCr);

		parent::tearDown();
	}

}
