<div class="eocSummaryMcs form">
<?php echo $this->Form->create('EocSummaryMc'); ?>
	<fieldset>
		<legend><?php echo __('Edit Eoc Summary Mc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('entered_by');
		echo $this->Form->input('region');
		echo $this->Form->input('district_id');
		echo $this->Form->input('hf_type');
		echo $this->Form->input('health_centre_id');
		echo $this->Form->input('in_charge');
		echo $this->Form->input('medical_store');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('cycle');
		echo $this->Form->input('number_teams');
		echo $this->Form->input('comp_dr_received_ag1');
		echo $this->Form->input('comp_dr_received_ag2');
		echo $this->Form->input('comp_dr_issued_ag1');
		echo $this->Form->input('comp_dr_issued_ag2');
		echo $this->Form->input('comp_dr_returned_ag1');
		echo $this->Form->input('comp_dr_returned_ag2');
		echo $this->Form->input('comp_dr_damaged_ag1');
		echo $this->Form->input('comp_dr_damaged_ag2');
		echo $this->Form->input('comp_dr_wasted_ag1');
		echo $this->Form->input('comp_dr_wasted_ag2');
		echo $this->Form->input('aq_returned_ag1');
		echo $this->Form->input('aq_returned_ag2');
		echo $this->Form->input('sp_returned_ag1');
		echo $this->Form->input('sp_returned_ag2');
		echo $this->Form->input('dr_stock_outs');
		echo $this->Form->input('number_referred_ag1');
		echo $this->Form->input('number_referred_ag2');
		echo $this->Form->input('sick_referred_ag1');
		echo $this->Form->input('sick_referred_ag2');
		echo $this->Form->input('fever_referred_ag1');
		echo $this->Form->input('fever_referred_ag2');
		echo $this->Form->input('ae_referred_ag1');
		echo $this->Form->input('ae_referred_ag2');
		echo $this->Form->input('confirmed_malaria_ag1');
		echo $this->Form->input('confirmed_malaria_ag2');
		echo $this->Form->input('neg_fev_smc_ag1');
		echo $this->Form->input('neg_fev_smc_ag2');
		echo $this->Form->input('sick_admitted_ag1');
		echo $this->Form->input('sick_admitted_ag2');
		echo $this->Form->input('sae_admitted_ag1');
		echo $this->Form->input('sae_admitted_ag2');
		echo $this->Form->input('severe_rash_ag1');
		echo $this->Form->input('severe_rash_ag2');
		echo $this->Form->input('walk_abnorm_ag1');
		echo $this->Form->input('walk_abnorm_ag2');
		echo $this->Form->input('yellow_eyes_ag1');
		echo $this->Form->input('yellow_eyes_ag2');
		echo $this->Form->input('sdr_ag1');
		echo $this->Form->input('sdr_ag2');
		echo $this->Form->input('pv_forms_compl_ag1');
		echo $this->Form->input('pv_forms_compl_ag2');
		echo $this->Form->input('ic_smc_train');
		echo $this->Form->input('pv_train');
		echo $this->Form->input('pv_guide');
		echo $this->Form->input('pv_form_stock_out');
		echo $this->Form->input('sms_reminder');
		echo $this->Form->input('signed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EocSummaryMc.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('EocSummaryMc.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Eoc Summary Mcs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Health Centres'), array('controller' => 'health_centres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Health Centre'), array('controller' => 'health_centres', 'action' => 'add')); ?> </li>
	</ul>
</div>
