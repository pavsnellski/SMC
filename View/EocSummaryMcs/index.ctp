<div class="eocSummaryMcs index">
	<h2><?php echo __('Eoc Summary Mcs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('entered_by'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('hf_type'); ?></th>
			<th><?php echo $this->Paginator->sort('health_centre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('in_charge'); ?></th>
			<th><?php echo $this->Paginator->sort('medical_store'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('cycle'); ?></th>
			<th><?php echo $this->Paginator->sort('number_teams'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_received_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_received_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_issued_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_issued_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_returned_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_returned_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_damaged_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_damaged_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_wasted_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('comp_dr_wasted_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_returned_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_returned_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_returned_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_returned_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('dr_stock_outs'); ?></th>
			<th><?php echo $this->Paginator->sort('number_referred_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('number_referred_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sick_referred_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sick_referred_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('fever_referred_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('fever_referred_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('ae_referred_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('ae_referred_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('confirmed_malaria_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('confirmed_malaria_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('neg_fev_smc_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('neg_fev_smc_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sick_admitted_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sick_admitted_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sae_admitted_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sae_admitted_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('severe_rash_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('severe_rash_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('walk_abnorm_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('walk_abnorm_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('yellow_eyes_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('yellow_eyes_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('sdr_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('sdr_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('pv_forms_compl_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('pv_forms_compl_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('ic_smc_train'); ?></th>
			<th><?php echo $this->Paginator->sort('pv_train'); ?></th>
			<th><?php echo $this->Paginator->sort('pv_guide'); ?></th>
			<th><?php echo $this->Paginator->sort('pv_form_stock_out'); ?></th>
			<th><?php echo $this->Paginator->sort('sms_reminder'); ?></th>
			<th><?php echo $this->Paginator->sort('signed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($eocSummaryMcs as $eocSummaryMc): ?>
	<tr>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['id']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['entered_by']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['region']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['district']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['hf_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eocSummaryMc['HealthCentre']['title'], array('controller' => 'health_centres', 'action' => 'view', $eocSummaryMc['HealthCentre']['id'])); ?>
		</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['in_charge']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['medical_store']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['cycle']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['number_teams']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_received_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_received_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_issued_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_issued_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_returned_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_returned_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_damaged_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_damaged_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_wasted_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_wasted_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['aq_returned_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['aq_returned_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sp_returned_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sp_returned_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['dr_stock_outs']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['number_referred_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['number_referred_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sick_referred_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sick_referred_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['fever_referred_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['fever_referred_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['ae_referred_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['ae_referred_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['confirmed_malaria_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['confirmed_malaria_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['neg_fev_smc_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['neg_fev_smc_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sick_admitted_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sick_admitted_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sae_admitted_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sae_admitted_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['severe_rash_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['severe_rash_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['walk_abnorm_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['walk_abnorm_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['yellow_eyes_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['yellow_eyes_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sdr_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sdr_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['pv_forms_compl_ag1']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['pv_forms_compl_ag2']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['ic_smc_train']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['pv_train']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['pv_guide']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['pv_form_stock_out']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['sms_reminder']); ?>&nbsp;</td>
		<td><?php echo h($eocSummaryMc['EocSummaryMc']['signed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eocSummaryMc['EocSummaryMc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eocSummaryMc['EocSummaryMc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eocSummaryMc['EocSummaryMc']['id']), array(), __('Are you sure you want to delete # %s?', $eocSummaryMc['EocSummaryMc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Eoc Summary Mc'), array('action' => 'add')); ?></li>
		
	</ul>
</div>
