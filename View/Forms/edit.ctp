<div class="forms form">
<?php echo $this->Form->create('Form'); ?>
	<fieldset>
		<legend><?php echo __('Edit Form'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('managing_group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Form.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Form.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Managing Groups'), array('controller' => 'managing_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Managing Group'), array('controller' => 'managing_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('controller' => 'form_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section'), array('controller' => 'form_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
