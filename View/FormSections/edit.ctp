<div class="formSections form">
<?php echo $this->Form->create('FormSection'); ?>
	<fieldset>
		<legend><?php echo __('Edit Form Section'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('form_id');
		echo $this->Form->input('title');
		echo $this->Form->input('section_order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FormSection.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FormSection.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Section Variables'), array('controller' => 'form_section_variables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section Variable'), array('controller' => 'form_section_variables', 'action' => 'add')); ?> </li>
	</ul>
</div>
