<div class="formSections view">
<?php
 //debug(h($formSection));?>
<h2><?php 

echo __('Form Section'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formSection['FormSection']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Form'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formSection['Form']['title'], array('controller' => 'forms', 'action' => 'view', $formSection['Form']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($formSection['FormSection']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Section Order'); ?></dt>
		<dd>
			<?php echo h($formSection['FormSection']['section_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($formSection['FormSection']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($formSection['FormSection']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form Section'), array('action' => 'edit', $formSection['FormSection']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form Section'), array('action' => 'delete', $formSection['FormSection']['id']), array(), __('Are you sure you want to delete # %s?', $formSection['FormSection']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('controller' => 'forms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('controller' => 'forms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Section Variables'), array('controller' => 'form_section_variables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section Variable'), array('controller' => 'form_section_variables', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Form Section Variables'); ?></h3>
	<?php if (!empty($formSection['FormSectionVariable'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Label English'); ?></th>
		<th><?php echo __('Label French'); ?></th>
		<th><?php echo __('Form Section Id'); ?></th>
		<th><?php echo __('Variable Order'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Var Type'); ?></th>
		<th><?php echo __('Codelist Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formSection['FormSectionVariable'] as $formSectionVariable): ?>
		<tr>
			<td><?php echo $formSectionVariable['id']; ?></td>
			<td><?php echo $formSectionVariable['title']; ?></td>
			<td><?php echo $formSectionVariable['label_english']; ?></td>
			<td><?php echo $formSectionVariable['label_french']; ?></td>
			<td><?php echo $formSectionVariable['form_section_id']; ?></td>
			<td><?php echo $formSectionVariable['variable_order']; ?></td>
			<td><?php echo $formSectionVariable['created']; ?></td>
			<td><?php echo $formSectionVariable['modified']; ?></td>
			<td><?php echo $formSectionVariable['var_type']; ?></td>
			<td><?php echo $formSectionVariable['codelist_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'form_section_variables', 'action' => 'view', $formSectionVariable['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'form_section_variables', 'action' => 'edit', $formSectionVariable['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'form_section_variables', 'action' => 'delete', $formSectionVariable['id']), array(), __('Are you sure you want to delete # %s?', $formSectionVariable['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Form Section Variable'), array('controller' => 'form_section_variables', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
