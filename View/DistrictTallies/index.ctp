<div class="districtTallies index">
	<h2><?php echo __('District Tallies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('sheet_number'); ?></th>
			<th><?php echo $this->Paginator->sort('dist_date'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th><?php echo $this->Paginator->sort('hdistrict'); ?></th>
			<th><?php echo $this->Paginator->sort('health_centre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('health_centre'); ?></th>
			<th><?php echo $this->Paginator->sort('strategy'); ?></th>
			<th><?php echo $this->Paginator->sort('chwname'); ?></th>
			<th><?php echo $this->Paginator->sort('cell'); ?></th>
			<th><?php echo $this->Paginator->sort('supervisor'); ?></th>
			<th><?php echo $this->Paginator->sort('ph'); ?></th>
			<th><?php echo $this->Paginator->sort('village'); ?></th>
			<th><?php echo $this->Paginator->sort('cycle'); ?></th>
			<th><?php echo $this->Paginator->sort('cycleday'); ?></th>
			<th><?php echo $this->Paginator->sort('rec_smc_ag1_b'); ?></th>
			<th><?php echo $this->Paginator->sort('rec_smc_ag1_g'); ?></th>
			<th><?php echo $this->Paginator->sort('inegbl_smc_ag1_b'); ?></th>
			<th><?php echo $this->Paginator->sort('inegbl_smc_ag1_g'); ?></th>
			<th><?php echo $this->Paginator->sort('redose_smc_ag1_b'); ?></th>
			<th><?php echo $this->Paginator->sort('redose_smc_ag1_g'); ?></th>
			<th><?php echo $this->Paginator->sort('rec_smc_ag2_b'); ?></th>
			<th><?php echo $this->Paginator->sort('rec_smc_ag2_g'); ?></th>
			<th><?php echo $this->Paginator->sort('inegbl_smc_ag2_b'); ?></th>
			<th><?php echo $this->Paginator->sort('inegbl_smc_ag2_g'); ?></th>
			<th><?php echo $this->Paginator->sort('redose_smc_ag2_b'); ?></th>
			<th><?php echo $this->Paginator->sort('redose_smc_ag2_g'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_compl_start_number'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_compl_dist_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_compl_remain'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_compl_lost'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_compl_obs'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_sp_start_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_sp_dist_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_sp_remain'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_sp_lost'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_sp_obs'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_aq_start_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_aq_dist_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_aq_remain'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_aq_lost'); ?></th>
			<th><?php echo $this->Paginator->sort('ag1_aq_obs'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_compl_start_number'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_compl_dist_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_compl_remain'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_compl_lost'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_compl_obs'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_sp_start_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_sp_dist_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_sp_remain'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_sp_lost'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_sp_obs'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_aq_start_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_aq_dist_num'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_aq_remain'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_aq_lost'); ?></th>
			<th><?php echo $this->Paginator->sort('ag2_aq_obs'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($districtTallies as $districtTally): ?>
	<tr>
		<td><?php echo h($districtTally['DistrictTally']['sheet_number']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['dist_date']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['country']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['region']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['hdistrict']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['health_centre_id']); ?>&nbsp;</td>
		<td>
			<?php echo h($districtTally['HealthCentre']['title']); ?>
		</td>
		<td><?php echo h($districtTally['DistrictTally']['strategy']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['chwname']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['cell']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['supervisor']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ph']); ?>&nbsp;</td>
		
		<td><?php echo h($districtTally['DistrictTally']['village']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['cycle']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['cycleday']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['rec_smc_ag1_b']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['rec_smc_ag1_g']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['inegbl_smc_ag1_b']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['inegbl_smc_ag1_g']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['redose_smc_ag1_b']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['redose_smc_ag1_g']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['rec_smc_ag2_b']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['rec_smc_ag2_g']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['inegbl_smc_ag2_b']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['inegbl_smc_ag2_g']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['redose_smc_ag2_b']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['redose_smc_ag2_g']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_compl_start_number']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_compl_dist_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_compl_remain']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_compl_lost']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_compl_obs']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_sp_start_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_sp_dist_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_sp_remain']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_sp_lost']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_sp_obs']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_aq_start_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_aq_dist_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_aq_remain']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_aq_lost']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag1_aq_obs']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_compl_start_number']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_compl_dist_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_compl_remain']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_compl_lost']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_compl_obs']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_sp_start_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_sp_dist_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_sp_remain']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_sp_lost']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_sp_obs']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_aq_start_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_aq_dist_num']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_aq_remain']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_aq_lost']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['ag2_aq_obs']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['created']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['modified']); ?>&nbsp;</td>
		<td><?php echo h($districtTally['DistrictTally']['id']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $districtTally['DistrictTally']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $districtTally['DistrictTally']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $districtTally['DistrictTally']['id']), array(), __('Are you sure you want to delete # %s?', $districtTally['DistrictTally']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New District Tally'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Health Centres'), array('controller' => 'health_centres', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Health Centre'), array('controller' => 'health_centres', 'action' => 'add')); ?> </li>
	</ul>
</div>
