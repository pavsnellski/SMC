<div class="eocSummaryCrs view">
<h2><?php echo __('Eoc Summary Cr'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eocSummaryCr['District']['title'], array('controller' => 'districts', 'action' => 'view', $eocSummaryCr['District']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Health Centre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eocSummaryCr['HealthCentre']['title'], array('controller' => 'health_centres', 'action' => 'view', $eocSummaryCr['HealthCentre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entered By'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['entered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['district']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hf Type'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['hf_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hf Name'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['hf_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hfw In Charge'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['hfw_in_charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medical Store'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['medical_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distribution Dates Start'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['distribution_dates_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Distribution Dates End'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['distribution_dates_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cycle'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['cycle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Distribution Teams'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_distribution_teams']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Treated Ag1 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag1_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Treated Ag1 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag1_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Treated Ag2 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag2_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Treated Ag2 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag2_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Redosed Ag1 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag1_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Redosed Ag1 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag1_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Redosed Ag2 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag2_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Redosed Ag2 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag2_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Seen No Smc Ag1 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag1_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Seen No Smc Ag1 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag1_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Seen No Smc Ag2 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag2_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Seen No Smc Ag2 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag2_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Smc Post Referral Ag1 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag1_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Smc Post Referral Ag1 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag1_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Smc Post Referral Ag2 B'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag2_b']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Smc Post Referral Ag2 G'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag2_g']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Compl Packs Ob Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_compl_packs_ob_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Compl Packs Ob Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_compl_packs_ob_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Packs Received Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_received_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Packs Received Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_received_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Packs Left Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_left_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Packs Left Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_left_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Open Bal Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['sp_open_bal_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Open Bal Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['sp_open_bal_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Received Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['sp_received_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Received Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['sp_received_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Remaining Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['sp_remaining_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Remaining Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['sp_remaining_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Open Bal Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['aq_open_bal_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Open Bal Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['aq_open_bal_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Received Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['aq_received_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Received Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['aq_received_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Remaining Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['aq_remaining_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Remaining Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['aq_remaining_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Any Stock Outs'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['any_stock_outs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Sus Sae'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_sus_sae']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Num Pv Completed'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['num_pv_completed']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pv Trained'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['pv_trained']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pv Form Stockouts'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['pv_form_stockouts']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Safety Guides'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['safety_guides']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sms Received'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['sms_received']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Signed Ic'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['signed_ic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($eocSummaryCr['EocSummaryCr']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eoc Summary Cr'), array('action' => 'edit', $eocSummaryCr['EocSummaryCr']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eoc Summary Cr'), array('action' => 'delete', $eocSummaryCr['EocSummaryCr']['id']), array(), __('Are you sure you want to delete # %s?', $eocSummaryCr['EocSummaryCr']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eoc Summary Crs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eoc Summary Cr'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Health Centres'), array('controller' => 'health_centres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Health Centre'), array('controller' => 'health_centres', 'action' => 'add')); ?> </li>
	</ul>
</div>
