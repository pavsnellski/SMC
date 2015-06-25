<div class="eocSummaryMcs view">
<h2><?php echo __('Eoc Summary Mc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entered By'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['entered_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Region'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['region']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('District Id'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['district_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hf Type'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['hf_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Health Centre'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eocSummaryMc['HealthCentre']['title'], array('controller' => 'health_centres', 'action' => 'view', $eocSummaryMc['HealthCentre']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Charge'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['in_charge']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medical Store'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['medical_store']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cycle'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['cycle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Teams'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['number_teams']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Received Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_received_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Received Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_received_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Issued Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_issued_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Issued Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_issued_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Returned Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_returned_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Returned Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_returned_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Damaged Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_damaged_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Damaged Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_damaged_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Wasted Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_wasted_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comp Dr Wasted Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['comp_dr_wasted_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Returned Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['aq_returned_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aq Returned Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['aq_returned_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Returned Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sp_returned_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sp Returned Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sp_returned_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dr Stock Outs'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['dr_stock_outs']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Referred Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['number_referred_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Referred Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['number_referred_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sick Referred Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sick_referred_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sick Referred Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sick_referred_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fever Referred Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['fever_referred_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fever Referred Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['fever_referred_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ae Referred Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['ae_referred_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ae Referred Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['ae_referred_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmed Malaria Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['confirmed_malaria_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Confirmed Malaria Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['confirmed_malaria_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neg Fev Smc Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['neg_fev_smc_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neg Fev Smc Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['neg_fev_smc_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sick Admitted Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sick_admitted_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sick Admitted Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sick_admitted_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sae Admitted Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sae_admitted_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sae Admitted Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sae_admitted_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Severe Rash Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['severe_rash_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Severe Rash Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['severe_rash_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Walk Abnorm Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['walk_abnorm_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Walk Abnorm Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['walk_abnorm_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Yellow Eyes Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['yellow_eyes_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Yellow Eyes Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['yellow_eyes_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sdr Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sdr_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sdr Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sdr_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pv Forms Compl Ag1'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['pv_forms_compl_ag1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pv Forms Compl Ag2'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['pv_forms_compl_ag2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ic Smc Train'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['ic_smc_train']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pv Train'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['pv_train']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pv Guide'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['pv_guide']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pv Form Stock Out'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['pv_form_stock_out']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sms Reminder'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['sms_reminder']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Signed'); ?></dt>
		<dd>
			<?php echo h($eocSummaryMc['EocSummaryMc']['signed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eoc Summary Mc'), array('action' => 'edit', $eocSummaryMc['EocSummaryMc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eoc Summary Mc'), array('action' => 'delete', $eocSummaryMc['EocSummaryMc']['id']), array(), __('Are you sure you want to delete # %s?', $eocSummaryMc['EocSummaryMc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eoc Summary Mcs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eoc Summary Mc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Districts'), array('controller' => 'districts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New District'), array('controller' => 'districts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Health Centres'), array('controller' => 'health_centres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Health Centre'), array('controller' => 'health_centres', 'action' => 'add')); ?> </li>
	</ul>
</div>
