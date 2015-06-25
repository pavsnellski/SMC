<?php
/**
 * DailyTalliesMcFixture
 *
 */
class DailyTalliesMcFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'daily_tallies_mc';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'tally_sheet' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'region' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hf' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'village' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'chw1' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'chw2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cycle' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'cycle_day' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_rec_spaq_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_rec_spaq_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_inel_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_inel_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_redose_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_redose_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'total_num' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag1_ob' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag1_tr' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag1_qu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag1_tl' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag1_trem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag1_obv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sp_ag1_ob' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag1_tr' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag1_qu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag1_tl' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag1_trem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag1_obv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aq_ag1_ob' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag1_tr' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag1_qu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag1_tl' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag1_trem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag1_obv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'compl_packs_ag2_ob' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag2_tr' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag2_qu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag2_tl' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag2_trem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'compl_packs_ag2_obv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sp_ag2_ob' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag2_tr' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag2_qu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag2_tl' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag2_trem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_ag2_obv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'aq_ag2_ob' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag2_tr' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag2_qu' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag2_tl' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag2_trem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_ag2_obv' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1000, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'signed' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'id' => 1,
			'tally_sheet' => 1,
			'state' => 'Lorem ipsum dolor sit amet',
			'region' => 'Lorem ipsum dolor sit amet',
			'hf' => 1,
			'village' => 'Lorem ipsum dolor sit amet',
			'chw1' => 'Lorem ipsum dolor sit amet',
			'chw2' => 'Lorem ipsum dolor sit amet',
			'cycle' => 1,
			'cycle_day' => 1,
			'num_rec_spaq_ag1' => 1,
			'num_rec_spaq_ag2' => 1,
			'num_inel_ag1' => 1,
			'num_inel_ag2' => 1,
			'num_redose_ag1' => 1,
			'num_redose_ag2' => 1,
			'total_num' => 1,
			'compl_packs_ag1_ob' => 1,
			'compl_packs_ag1_tr' => 1,
			'compl_packs_ag1_qu' => 1,
			'compl_packs_ag1_tl' => 1,
			'compl_packs_ag1_trem' => 1,
			'compl_packs_ag1_obv' => 'Lorem ipsum dolor sit amet',
			'sp_ag1_ob' => 1,
			'sp_ag1_tr' => 1,
			'sp_ag1_qu' => 1,
			'sp_ag1_tl' => 1,
			'sp_ag1_trem' => 1,
			'sp_ag1_obv' => 'Lorem ipsum dolor sit amet',
			'aq_ag1_ob' => 1,
			'aq_ag1_tr' => 1,
			'aq_ag1_qu' => 1,
			'aq_ag1_tl' => 1,
			'aq_ag1_trem' => 1,
			'aq_ag1_obv' => 'Lorem ipsum dolor sit amet',
			'compl_packs_ag2_ob' => 1,
			'compl_packs_ag2_tr' => 1,
			'compl_packs_ag2_qu' => 1,
			'compl_packs_ag2_tl' => 1,
			'compl_packs_ag2_trem' => 1,
			'compl_packs_ag2_obv' => 'Lorem ipsum dolor sit amet',
			'sp_ag2_ob' => 1,
			'sp_ag2_tr' => 1,
			'sp_ag2_qu' => 1,
			'sp_ag2_tl' => 1,
			'sp_ag2_trem' => 1,
			'sp_ag2_obv' => 'Lorem ipsum dolor sit amet',
			'aq_ag2_ob' => 1,
			'aq_ag2_tr' => 1,
			'aq_ag2_qu' => 1,
			'aq_ag2_tl' => 1,
			'aq_ag2_trem' => 1,
			'aq_ag2_obv' => 'Lorem ipsum dolor sit amet',
			'signed' => 1
		),
	);

}
