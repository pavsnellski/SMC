<div class="formSectionVariables form">
<?php echo $this->Form->create('FormSectionVariable'); ?>
	<fieldset>
		<legend><?php echo __('Edit Form Section Variable'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('label_english');
		echo $this->Form->input('label_french');
		echo $this->Form->input('form_section_id');
		echo $this->Form->input('variable_order');
		echo $this->Form->input('var_type');
		echo $this->Form->input('codelist_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FormSectionVariable.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FormSectionVariable.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Form Section Variables'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('controller' => 'form_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section'), array('controller' => 'form_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Codelists'), array('controller' => 'codelists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Codelist'), array('controller' => 'codelists', 'action' => 'add')); ?> </li>
	</ul>
</div>
