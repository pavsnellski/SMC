<div class="formSections index">
	<h2><?php echo __('Form Sections'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('form_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('section_order'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($formSections as $formSection): ?>
	<tr>
		<td><?php echo h($formSection['FormSection']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($formSection['Form']['title'], array('controller' => 'forms', 'action' => 'view', $formSection['Form']['id'])); ?>
		</td>
		<td><?php echo h($formSection['FormSection']['title']); ?>&nbsp;</td>
		<td><?php echo h($formSection['FormSection']['section_order']); ?>&nbsp;</td>
		<td><?php echo h($formSection['FormSection']['created']); ?>&nbsp;</td>
		<td><?php echo h($formSection['FormSection']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $formSection['FormSection']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $formSection['FormSection']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $formSection['FormSection']['id']), array(), __('Are you sure you want to delete # %s?', $formSection['FormSection']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Form Section'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Section Variables'), array('controller' => 'form_section_variables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section Variable'), array('controller' => 'form_section_variables', 'action' => 'add')); ?> </li>
	</ul>
</div>
