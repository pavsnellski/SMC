<?php
App::uses('DailyTalliesMc', 'Model');

/**
 * DailyTalliesMc Test Case
 *
 */
class DailyTalliesMcTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.daily_tallies_mc'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->DailyTalliesMc = ClassRegistry::init('DailyTalliesMc');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->DailyTalliesMc);

		parent::tearDown();
	}

}
