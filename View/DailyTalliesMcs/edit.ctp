<div class="dailyTalliesMcs form">
<?php echo $this->Form->create('DailyTalliesMc'); ?>
	<fieldset>
		<legend><?php echo __('Edit Daily Tallies Mc'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tally_sheet');
		echo $this->Form->input('state');
		echo $this->Form->input('region');
		echo $this->Form->input('hf');
		echo $this->Form->input('village');
		echo $this->Form->input('chw1');
		echo $this->Form->input('chw2');
		echo $this->Form->input('cycle');
		echo $this->Form->input('cycle_day');
		echo $this->Form->input('num_rec_spaq_ag1');
		echo $this->Form->input('num_rec_spaq_ag2');
		echo $this->Form->input('num_inel_ag1');
		echo $this->Form->input('num_inel_ag2');
		echo $this->Form->input('num_redose_ag1');
		echo $this->Form->input('num_redose_ag2');
		echo $this->Form->input('total_num');
		echo $this->Form->input('compl_packs_ag1_ob');
		echo $this->Form->input('compl_packs_ag1_tr');
		echo $this->Form->input('compl_packs_ag1_qu');
		echo $this->Form->input('compl_packs_ag1_tl');
		echo $this->Form->input('compl_packs_ag1_trem');
		echo $this->Form->input('compl_packs_ag1_obv');
		echo $this->Form->input('sp_ag1_ob');
		echo $this->Form->input('sp_ag1_tr');
		echo $this->Form->input('sp_ag1_qu');
		echo $this->Form->input('sp_ag1_tl');
		echo $this->Form->input('sp_ag1_trem');
		echo $this->Form->input('sp_ag1_obv');
		echo $this->Form->input('aq_ag1_ob');
		echo $this->Form->input('aq_ag1_tr');
		echo $this->Form->input('aq_ag1_qu');
		echo $this->Form->input('aq_ag1_tl');
		echo $this->Form->input('aq_ag1_trem');
		echo $this->Form->input('aq_ag1_obv');
		echo $this->Form->input('compl_packs_ag2_ob');
		echo $this->Form->input('compl_packs_ag2_tr');
		echo $this->Form->input('compl_packs_ag2_qu');
		echo $this->Form->input('compl_packs_ag2_tl');
		echo $this->Form->input('compl_packs_ag2_trem');
		echo $this->Form->input('compl_packs_ag2_obv');
		echo $this->Form->input('sp_ag2_ob');
		echo $this->Form->input('sp_ag2_tr');
		echo $this->Form->input('sp_ag2_qu');
		echo $this->Form->input('sp_ag2_tl');
		echo $this->Form->input('sp_ag2_trem');
		echo $this->Form->input('sp_ag2_obv');
		echo $this->Form->input('aq_ag2_ob');
		echo $this->Form->input('aq_ag2_tr');
		echo $this->Form->input('aq_ag2_qu');
		echo $this->Form->input('aq_ag2_tl');
		echo $this->Form->input('aq_ag2_trem');
		echo $this->Form->input('aq_ag2_obv');
		echo $this->Form->input('signed');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DailyTalliesMc.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('DailyTalliesMc.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Daily Tallies Mcs'), array('action' => 'index')); ?></li>
	</ul>
</div>
