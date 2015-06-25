<div class="forms view">
<h2><?php 
//debug($form);
		//debug($this->viewVars['user']);
		//debug($this->Session->read('UserProfile'));
echo __('Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($form['Form']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($form['Form']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Managing Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($form['ManagingGroup']['title'], array('controller' => 'managing_groups', 'action' => 'view', $form['ManagingGroup']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Form'), array('action' => 'edit', $form['Form']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Form'), array('action' => 'delete', $form['Form']['id']), array(), __('Are you sure you want to delete # %s?', $form['Form']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Managing Groups'), array('controller' => 'managing_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Managing Group'), array('controller' => 'managing_groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Form Sections'), array('controller' => 'form_sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Form Section'), array('controller' => 'form_sections', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Form Sections'); ?></h3>
	<?php if (!empty($form['FormSection'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Form Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Section Order'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($form['FormSection'] as $formSection): ?>
		<tr>
			<td><?php echo $formSection['id']; ?></td>
			<td><?php echo $formSection['form_id']; ?></td>
			<td><?php echo $formSection['title']; ?></td>
			<td><?php echo $formSection['section_order']; ?></td>
			<td><?php echo $formSection['created']; ?></td>
			<td><?php echo $formSection['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'form_sections', 'action' => 'view', $formSection['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'form_sections', 'action' => 'edit', $formSection['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'form_sections', 'action' => 'delete', $formSection['id']), array(), __('Are you sure you want to delete # %s?', $formSection['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Form Section'), array('controller' => 'form_sections', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
