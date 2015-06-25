<div class="dailyTalliesMcs index">
	<h2><?php echo __('Daily Tallies Mcs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tally_sheet'); ?></th>
			<th><?php echo $this->Paginator->sort('region'); ?></th>
			<th><?php echo $this->Paginator->sort('district'); ?></th>
			<th><?php echo $this->Paginator->sort('health_centre_id'); ?></th>
			<th><?php echo $this->Paginator->sort('village'); ?></th>
			<th><?php echo $this->Paginator->sort('chw1'); ?></th>
			<th><?php echo $this->Paginator->sort('chw2'); ?></th>
			<th><?php echo $this->Paginator->sort('cycle'); ?></th>
			<th><?php echo $this->Paginator->sort('cycle_day'); ?></th>
			<th><?php echo $this->Paginator->sort('num_rec_spaq_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('num_rec_spaq_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('num_inel_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('num_inel_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('num_redose_ag1'); ?></th>
			<th><?php echo $this->Paginator->sort('num_redose_ag2'); ?></th>
			<th><?php echo $this->Paginator->sort('total_num'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag1_ob'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag1_tr'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag1_qu'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag1_tl'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag1_trem'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag1_obv'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag1_ob'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag1_tr'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag1_qu'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag1_tl'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag1_trem'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag1_obv'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag1_ob'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag1_tr'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag1_qu'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag1_tl'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag1_trem'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag1_obv'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag2_ob'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag2_tr'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag2_qu'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag2_tl'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag2_trem'); ?></th>
			<th><?php echo $this->Paginator->sort('compl_packs_ag2_obv'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag2_ob'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag2_tr'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag2_qu'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag2_tl'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag2_trem'); ?></th>
			<th><?php echo $this->Paginator->sort('sp_ag2_obv'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag2_ob'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag2_tr'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag2_qu'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag2_tl'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag2_trem'); ?></th>
			<th><?php echo $this->Paginator->sort('aq_ag2_obv'); ?></th>
			<th><?php echo $this->Paginator->sort('signed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dailyTalliesMcs as $dailyTalliesMc): ?>
	<tr>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['id']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['tally_sheet']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['region']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['district']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['health_centre_id']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['village']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['chw1']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['chw2']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['cycle']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['cycle_day']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['num_rec_spaq_ag1']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['num_rec_spaq_ag2']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['num_inel_ag1']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['num_inel_ag2']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['num_redose_ag1']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['num_redose_ag2']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['total_num']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag1_ob']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag1_tr']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag1_qu']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag1_tl']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag1_trem']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag1_obv']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag1_ob']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag1_tr']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag1_qu']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag1_tl']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag1_trem']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag1_obv']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag1_ob']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag1_tr']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag1_qu']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag1_tl']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag1_trem']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag1_obv']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag2_ob']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag2_tr']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag2_qu']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag2_tl']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag2_trem']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['compl_packs_ag2_obv']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag2_ob']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag2_tr']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag2_qu']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag2_tl']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag2_trem']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['sp_ag2_obv']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag2_ob']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag2_tr']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag2_qu']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag2_tl']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag2_trem']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['aq_ag2_obv']); ?>&nbsp;</td>
		<td><?php echo h($dailyTalliesMc['DailyTalliesMc']['signed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dailyTalliesMc['DailyTalliesMc']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dailyTalliesMc['DailyTalliesMc']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dailyTalliesMc['DailyTalliesMc']['id']), array(), __('Are you sure you want to delete # %s?', $dailyTalliesMc['DailyTalliesMc']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Daily Tallies Mc'), array('action' => 'add',3)); ?></li>
	</ul>
</div>
