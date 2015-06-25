<?php
class DATABASE_CONFIG {

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'act2012repository',
		'database' => 'test_access_smc_1_1_1',
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'port' => 3306,
		'login' => 'root',
		'password' => 'act2012repository',
		'database' => 'access_smc_1_1_1',
		'encoding' => 'utf8'
	);
}
