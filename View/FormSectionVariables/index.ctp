<div class="formSectionVariables index">
	<h2><?php echo __('Form Section Variables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('label_english'); ?></th>
			<th><?php echo $this->Paginator->sort('label_french'); ?></th>
			<th><?php echo $this->Paginator->sort('form_section_id'); ?></th>
			<th><?php echo $this->Paginator->sort('variable_order'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('var_type'); ?></th>
			<th><?php echo $this->Paginator->sort('codelist_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($formSectionVariables as $formSectionVariable): ?>
	<tr>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['id']); ?>&nbsp;</td>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['title']); ?>&nbsp;</td>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['label_english']); ?>&nbsp;</td>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['label_french']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($formSectionVariable['FormSection']['title'], array('controller' => 'form_sections', 'action' => 'view', $formSectionVariable['FormSection']['id'])); ?>
		</td>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['variable_order']); ?>&nbsp;</td>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['created']); ?>&nbsp;</td>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['modified']); ?>&nbsp;</td>
		<td><?php echo h($formSectionVariable['FormSectionVariable']['var_type']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($formSectionVariable['Codelist']['title'], array('controller' => 'codelists', 'action' => 'view', $formSectionVariable['Codelist']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formSectionVariable['FormSectionVariable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formSectionVariable['FormSectionVariable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formSectionVariable['FormSectionVariable']['id']), array(), __('Are you sure you want to delete # %s?', $formSectionVariable['FormSectionVariable']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Form Section Variable'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('controller' => 'form_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section'), array('controller' => 'form_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Codelists'), array('controller' => 'codelists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Codelist'), array('controller' => 'codelists', 'action' => 'add')); ?> </li>
	</ul>
</div>
