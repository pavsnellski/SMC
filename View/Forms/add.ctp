<div class="forms form">
<?php echo $this->Form->create('Form'); ?>
	<fieldset>
		<legend><?php echo __('Add Form'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('managing_group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Managing Groups'), array('controller' => 'managing_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Managing Group'), array('controller' => 'managing_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('controller' => 'form_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section'), array('controller' => 'form_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
