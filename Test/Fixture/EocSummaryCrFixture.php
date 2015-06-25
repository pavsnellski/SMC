<?php
/**
 * EocSummaryCrFixture
 *
 */
class EocSummaryCrFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'district_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'health_centre_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'entered_by' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'region' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'district' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hf_type' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'hf_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'hfw_in_charge' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'medical_store' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'distribution_dates_start' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'distribution_dates_end' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'cycle' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_distribution_teams' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_treated_ag1_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_treated_ag1_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_treated_ag2_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_treated_ag2_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_redosed_ag1_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_redosed_ag1_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_redosed_ag2_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_redosed_ag2_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_seen_no_smc_ag1_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_seen_no_smc_ag1_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_seen_no_smc_ag2_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_seen_no_smc_ag2_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_smc_post_referral_ag1_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_smc_post_referral_ag1_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_smc_post_referral_ag2_b' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_smc_post_referral_ag2_g' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_compl_packs_ob_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_compl_packs_ob_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_packs_received_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_packs_received_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_packs_left_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_packs_left_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_open_bal_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_open_bal_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_received_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_received_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_remaining_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sp_remaining_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_open_bal_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_open_bal_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_received_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_received_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_remaining_ag1' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'aq_remaining_ag2' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'any_stock_outs' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_sus_sae' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'num_pv_completed' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'pv_trained' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'pv_form_stockouts' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'safety_guides' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'sms_received' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'signed_ic' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'district_id' => 1,
			'health_centre_id' => 1,
			'entered_by' => 1,
			'region' => 'Lorem ipsum dolor sit amet',
			'district' => 'Lorem ipsum dolor sit amet',
			'hf_type' => 1,
			'hf_name' => 'Lorem ipsum dolor sit amet',
			'hfw_in_charge' => 'Lorem ipsum dolor sit amet',
			'medical_store' => 'Lorem ipsum dolor sit amet',
			'distribution_dates_start' => '2015-06-10 18:19:23',
			'distribution_dates_end' => '2015-06-10 18:19:23',
			'cycle' => 1,
			'num_distribution_teams' => 1,
			'num_treated_ag1_b' => 1,
			'num_treated_ag1_g' => 1,
			'num_treated_ag2_b' => 1,
			'num_treated_ag2_g' => 1,
			'num_redosed_ag1_b' => 1,
			'num_redosed_ag1_g' => 1,
			'num_redosed_ag2_b' => 1,
			'num_redosed_ag2_g' => 1,
			'num_seen_no_smc_ag1_b' => 1,
			'num_seen_no_smc_ag1_g' => 1,
			'num_seen_no_smc_ag2_b' => 1,
			'num_seen_no_smc_ag2_g' => 1,
			'num_smc_post_referral_ag1_b' => 1,
			'num_smc_post_referral_ag1_g' => 1,
			'num_smc_post_referral_ag2_b' => 1,
			'num_smc_post_referral_ag2_g' => 1,
			'num_compl_packs_ob_ag1' => 1,
			'num_compl_packs_ob_ag2' => 1,
			'num_packs_received_ag1' => 1,
			'num_packs_received_ag2' => 1,
			'num_packs_left_ag1' => 1,
			'num_packs_left_ag2' => 1,
			'sp_open_bal_ag1' => 1,
			'sp_open_bal_ag2' => 1,
			'sp_received_ag1' => 1,
			'sp_received_ag2' => 1,
			'sp_remaining_ag1' => 1,
			'sp_remaining_ag2' => 1,
			'aq_open_bal_ag1' => 1,
			'aq_open_bal_ag2' => 1,
			'aq_received_ag1' => 1,
			'aq_received_ag2' => 1,
			'aq_remaining_ag1' => 1,
			'aq_remaining_ag2' => 1,
			'any_stock_outs' => 1,
			'num_sus_sae' => 1,
			'num_pv_completed' => 1,
			'pv_trained' => 1,
			'pv_form_stockouts' => 1,
			'safety_guides' => 1,
			'sms_received' => 1,
			'signed_ic' => 1,
			'created' => '2015-06-10 18:19:23',
			'modified' => '2015-06-10 18:19:23'
		),
	);

}
