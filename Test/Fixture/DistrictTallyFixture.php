<?php
/**
 * DistrictTallyFixture
 *
 */
class DistrictTallyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'dist_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'region' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hdistrict' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'supervisor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ph' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hc' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'strategy' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'teamno' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'chwname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cell' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'village' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cycle' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'cycleday' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rec_smc_ag1_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rec_smc_ag1_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'inegbl_smc_ag1_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'inegbl_smc_ag1_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'redose_smc_ag1_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'redose_smc_ag1_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rec_smc_ag2_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rec_smc_ag2_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'inegbl_smc_ag2_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'inegbl_smc_ag2_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'redose_smc_ag2_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'redose_smc_ag2_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_compl_start_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_compl_dist_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_compl_remain' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_compl_lost' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_compl_obs' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_sp_start_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_sp_dist_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_sp_remain' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_sp_lost' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_sp_obs' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_aq_start_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_aq_dist_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_aq_remain' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_aq_lost' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag1_aq_obs' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_compl_start_number' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_compl_dist_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_compl_remain' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_compl_lost' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_compl_obs' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_sp_start_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_sp_dist_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_sp_remain' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_sp_lost' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_sp_obs' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_aq_start_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_aq_dist_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_aq_remain' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_aq_lost' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'ag2_aq_obs' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'health_centre_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'dist_date' => '2015-06-09',
			'region' => 'Lorem ipsum dolor sit amet',
			'hdistrict' => 'Lorem ipsum dolor sit amet',
			'supervisor' => 'Lorem ipsum dolor sit amet',
			'ph' => 'Lorem ipsum dolor sit amet',
			'hc' => 'Lorem ipsum dolor sit amet',
			'strategy' => 1,
			'teamno' => 1,
			'chwname' => 'Lorem ipsum dolor sit amet',
			'cell' => 'Lorem ipsum dolor sit amet',
			'village' => 'Lorem ipsum dolor sit amet',
			'cycle' => 1,
			'cycleday' => 1,
			'rec_smc_ag1_b' => 1,
			'rec_smc_ag1_g' => 1,
			'inegbl_smc_ag1_b' => 1,
			'inegbl_smc_ag1_g' => 1,
			'redose_smc_ag1_b' => 1,
			'redose_smc_ag1_g' => 1,
			'rec_smc_ag2_b' => 1,
			'rec_smc_ag2_g' => 1,
			'inegbl_smc_ag2_b' => 1,
			'inegbl_smc_ag2_g' => 1,
			'redose_smc_ag2_b' => 1,
			'redose_smc_ag2_g' => 1,
			'ag1_compl_start_number' => 1,
			'ag1_compl_dist_num' => 1,
			'ag1_compl_remain' => 1,
			'ag1_compl_lost' => 1,
			'ag1_compl_obs' => 1,
			'ag1_sp_start_num' => 1,
			'ag1_sp_dist_num' => 1,
			'ag1_sp_remain' => 1,
			'ag1_sp_lost' => 1,
			'ag1_sp_obs' => 1,
			'ag1_aq_start_num' => 1,
			'ag1_aq_dist_num' => 1,
			'ag1_aq_remain' => 1,
			'ag1_aq_lost' => 1,
			'ag1_aq_obs' => 1,
			'ag2_compl_start_number' => 1,
			'ag2_compl_dist_num' => 1,
			'ag2_compl_remain' => 1,
			'ag2_compl_lost' => 1,
			'ag2_compl_obs' => 1,
			'ag2_sp_start_num' => 1,
			'ag2_sp_dist_num' => 1,
			'ag2_sp_remain' => 1,
			'ag2_sp_lost' => 1,
			'ag2_sp_obs' => 1,
			'ag2_aq_start_num' => 1,
			'ag2_aq_dist_num' => 1,
			'ag2_aq_remain' => 1,
			'ag2_aq_lost' => 1,
			'ag2_aq_obs' => 1,
			'created' => '2015-06-09 18:08:48',
			'modified' => '2015-06-09 18:08:48',
			'id' => 1,
			'health_centre_id' => 1
		),
	);

}
