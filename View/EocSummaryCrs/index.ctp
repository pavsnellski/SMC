<div class="eocSummaryCrs index">
	<h2><?php echo __('Eoc Summary Crs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('hf_type'); ?></th>
			<th><?php echo $this->Paginator->sort('hf_name'); ?></th>
			<th><?php echo $this->Paginator->sort('hfw_in_charge'); ?></th>
			<th><?php echo $this->Paginator->sort('medical_store'); ?></th>
			<th><?php echo $this->Paginator->sort('distribution_dates_start'); ?></th>
			<th><?php echo $this->Paginator->sort('distribution_dates_end'); ?></th>
			<th><?php echo $this->Paginator->sort('cycle'); ?></th>
			<th><?php echo $this->Paginator->sort('num_distribution_teams'); ?></th>
			<th><?php echo $this->Paginator->sort('num_treated_ag1_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_treated_ag1_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_treated_ag2_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_treated_ag2_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_redosed_ag1_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_redosed_ag1_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_redosed_ag2_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_redosed_ag2_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_seen_no_smc_ag1_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_seen_no_smc_ag1_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_seen_no_smc_ag2_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_seen_no_smc_ag2_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_smc_post_referral_ag1_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_smc_post_referral_ag1_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_smc_post_referral_ag2_b'); ?></th>
			<th><?php echo $this->Paginator->sort('num_smc_post_referral_ag2_g'); ?></th>
			<th><?php echo $this->Paginator->sort('num_compl_packs_ob_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('num_compl_packs_ob_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('num_packs_received_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('num_packs_received_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('num_packs_left_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('num_packs_left_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_open_bal_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_open_bal_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_received_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_received_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_remaining_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_remaining_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_open_bal_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_open_bal_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_received_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_received_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_remaining_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_remaining_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('any_stock_outs'); ?></th>
			<th><?php echo $this->Paginator->sort('num_sus_sae'); ?></th>
			<th><?php echo $this->Paginator->sort('num_pv_completed'); ?></th>
			<th><?php echo $this->Paginator->sort('pv_trained'); ?></th>
			<th><?php echo $this->Paginator->sort('pv_form_stockouts'); ?></th>
			<th><?php echo $this->Paginator->sort('safety_guides'); ?></th>
			<th><?php echo $this->Paginator->sort('sms_received'); ?></th>
			<th><?php echo $this->Paginator->sort('signed_ic'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($eocSummaryCrs as $eocSummaryCr): ?>
	<tr>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['id']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['entered_by']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['region']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['district']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['hf_type']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['hf_name']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['hfw_in_charge']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['medical_store']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['distribution_dates_start']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['distribution_dates_end']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['cycle']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_distribution_teams']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag1_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag1_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag2_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_treated_ag2_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag1_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag1_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag2_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_redosed_ag2_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag1_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag1_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag2_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_seen_no_smc_ag2_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag1_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag1_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag2_b']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_smc_post_referral_ag2_g']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_compl_packs_ob_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_compl_packs_ob_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_received_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_received_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_left_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_packs_left_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['sp_open_bal_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['sp_open_bal_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['sp_received_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['sp_received_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['sp_remaining_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['sp_remaining_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['aq_open_bal_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['aq_open_bal_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['aq_received_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['aq_received_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['aq_remaining_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['aq_remaining_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['any_stock_outs']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_sus_sae']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['num_pv_completed']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['pv_trained']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['pv_form_stockouts']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['safety_guides']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['sms_received']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['signed_ic']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['created']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryCr['EocSummaryCr']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eocSummaryCr['EocSummaryCr']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eocSummaryCr['EocSummaryCr']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eocSummaryCr['EocSummaryCr']['id']), array(), __('Are you sure you want to delete # %s?', $eocSummaryCr['EocSummaryCr']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Eoc Summary Cr'), array('action' => 'add',2)); ?></li>

	</ul>
</div>
