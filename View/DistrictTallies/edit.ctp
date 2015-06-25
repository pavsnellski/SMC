<div class="districtTallies form">
<?php echo $this->Form->create('DistrictTally'); ?>
	<fieldset>
		<legend><?php echo __('Edit District Tally'); ?></legend>
	<?php
		echo $this->Form->input('dist_date');
		echo $this->Form->input('region');
		echo $this->Form->input('hdistrict');
		echo $this->Form->input('supervisor');
		echo $this->Form->input('ph');
		echo $this->Form->input('hc');
		echo $this->Form->input('strategy');
		echo $this->Form->input('teamno');
		echo $this->Form->input('chwname');
		echo $this->Form->input('cell');
		echo $this->Form->input('village');
		echo $this->Form->input('cycle');
		echo $this->Form->input('cycleday');
		echo $this->Form->input('rec_smc_ag1_b');
		echo $this->Form->input('rec_smc_ag1_g');
		echo $this->Form->input('inegbl_smc_ag1_b');
		echo $this->Form->input('inegbl_smc_ag1_g');
		echo $this->Form->input('redose_smc_ag1_b');
		echo $this->Form->input('redose_smc_ag1_g');
		echo $this->Form->input('rec_smc_ag2_b');
		echo $this->Form->input('rec_smc_ag2_g');
		echo $this->Form->input('inegbl_smc_ag2_b');
		echo $this->Form->input('inegbl_smc_ag2_g');
		echo $this->Form->input('redose_smc_ag2_b');
		echo $this->Form->input('redose_smc_ag2_g');
		echo $this->Form->input('ag1_compl_start_number');
		echo $this->Form->input('ag1_compl_dist_num');
		echo $this->Form->input('ag1_compl_remain');
		echo $this->Form->input('ag1_compl_lost');
		echo $this->Form->input('ag1_compl_obs');
		echo $this->Form->input('ag1_sp_start_num');
		echo $this->Form->input('ag1_sp_dist_num');
		echo $this->Form->input('ag1_sp_remain');
		echo $this->Form->input('ag1_sp_lost');
		echo $this->Form->input('ag1_sp_obs');
		echo $this->Form->input('ag1_aq_start_num');
		echo $this->Form->input('ag1_aq_dist_num');
		echo $this->Form->input('ag1_aq_remain');
		echo $this->Form->input('ag1_aq_lost');
		echo $this->Form->input('ag1_aq_obs');
		echo $this->Form->input('ag2_compl_start_number');
		echo $this->Form->input('ag2_compl_dist_num');
		echo $this->Form->input('ag2_compl_remain');
		echo $this->Form->input('ag2_compl_lost');
		echo $this->Form->input('ag2_compl_obs');
		echo $this->Form->input('ag2_sp_start_num');
		echo $this->Form->input('ag2_sp_dist_num');
		echo $this->Form->input('ag2_sp_remain');
		echo $this->Form->input('ag2_sp_lost');
		echo $this->Form->input('ag2_sp_obs');
		echo $this->Form->input('ag2_aq_start_num');
		echo $this->Form->input('ag2_aq_dist_num');
		echo $this->Form->input('ag2_aq_remain');
		echo $this->Form->input('ag2_aq_lost');
		echo $this->Form->input('ag2_aq_obs');
		echo $this->Form->input('id');
		echo $this->Form->input('health_centre_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DistrictTally.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DistrictTally.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List District Tallies'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Health Centres'), array('controller' => 'health_centres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Health Centre'), array('controller' => 'health_centres', 'action' => 'add')); ?> </li>
	</ul>
</div>
