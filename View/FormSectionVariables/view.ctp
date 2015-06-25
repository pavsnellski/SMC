<div class="formSectionVariables view">
<h2><?php echo __('Form Section Variable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label English'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['label_english']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Label French'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['label_french']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form Section'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formSectionVariable['FormSection']['title'], array('controller' => 'form_sections', 'action' => 'view', $formSectionVariable['FormSection']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Variable Order'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['variable_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Var Type'); ?></dt>
		<dd>
			<?php echo h($formSectionVariable['FormSectionVariable']['var_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codelist'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formSectionVariable['Codelist']['title'], array('controller' => 'codelists', 'action' => 'view', $formSectionVariable['Codelist']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Section Variable'), array('action' => 'edit', $formSectionVariable['FormSectionVariable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Section Variable'), array('action' => 'delete', $formSectionVariable['FormSectionVariable']['id']), array(), __('Are you sure you want to delete # %s?', $formSectionVariable['FormSectionVariable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Section Variables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section Variable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('controller' => 'form_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section'), array('controller' => 'form_sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Codelists'), array('controller' => 'codelists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Codelist'), array('controller' => 'codelists', 'action' => 'add')); ?> </li>
	</ul>
</div>
