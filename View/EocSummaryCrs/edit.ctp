<div class="eocSummaryCrs form">
<?php echo $this->Form->create('EocSummaryCr'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eoc Summary Cr'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('district_id');
		echo $this->Form->input('health_centre_id');
		echo $this->Form->input('entered_by');
		echo $this->Form->input('region');
		echo $this->Form->input('district');
		echo $this->Form->input('hf_type');
		echo $this->Form->input('hf_name');
		echo $this->Form->input('hfw_in_charge');
		echo $this->Form->input('medical_store');
		echo $this->Form->input('distribution_dates_start');
		echo $this->Form->input('distribution_dates_end');
		echo $this->Form->input('cycle');
		echo $this->Form->input('num_distribution_teams');
		echo $this->Form->input('num_treated_ag1_b');
		echo $this->Form->input('num_treated_ag1_g');
		echo $this->Form->input('num_treated_ag2_b');
		echo $this->Form->input('num_treated_ag2_g');
		echo $this->Form->input('num_redosed_ag1_b');
		echo $this->Form->input('num_redosed_ag1_g');
		echo $this->Form->input('num_redosed_ag2_b');
		echo $this->Form->input('num_redosed_ag2_g');
		echo $this->Form->input('num_seen_no_smc_ag1_b');
		echo $this->Form->input('num_seen_no_smc_ag1_g');
		echo $this->Form->input('num_seen_no_smc_ag2_b');
		echo $this->Form->input('num_seen_no_smc_ag2_g');
		echo $this->Form->input('num_smc_post_referral_ag1_b');
		echo $this->Form->input('num_smc_post_referral_ag1_g');
		echo $this->Form->input('num_smc_post_referral_ag2_b');
		echo $this->Form->input('num_smc_post_referral_ag2_g');
		echo $this->Form->input('num_compl_packs_ob_ag1');
		echo $this->Form->input('num_compl_packs_ob_ag2');
		echo $this->Form->input('num_packs_received_ag1');
		echo $this->Form->input('num_packs_received_ag2');
		echo $this->Form->input('num_packs_left_ag1');
		echo $this->Form->input('num_packs_left_ag2');
		echo $this->Form->input('sp_open_bal_ag1');
		echo $this->Form->input('sp_open_bal_ag2');
		echo $this->Form->input('sp_received_ag1');
		echo $this->Form->input('sp_received_ag2');
		echo $this->Form->input('sp_remaining_ag1');
		echo $this->Form->input('sp_remaining_ag2');
		echo $this->Form->input('aq_open_bal_ag1');
		echo $this->Form->input('aq_open_bal_ag2');
		echo $this->Form->input('aq_received_ag1');
		echo $this->Form->input('aq_received_ag2');
		echo $this->Form->input('aq_remaining_ag1');
		echo $this->Form->input('aq_remaining_ag2');
		echo $this->Form->input('any_stock_outs');
		echo $this->Form->input('num_sus_sae');
		echo $this->Form->input('num_pv_completed');
		echo $this->Form->input('pv_trained');
		echo $this->Form->input('pv_form_stockouts');
		echo $this->Form->input('safety_guides');
		echo $this->Form->input('sms_received');
		echo $this->Form->input('signed_ic');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EocSummaryCr.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EocSummaryCr.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eoc Summary Crs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Health Centres'), array('controller' => 'health_centres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Health Centre'), array('controller' => 'health_centres', 'action' => 'add')); ?> </li>
	</ul>
</div>
