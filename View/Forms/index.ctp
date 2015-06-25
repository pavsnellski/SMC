<div class="forms index">
	<h2><?php
	//debug($forms);
	//debug($this->viewVars['user']);
	if($this->viewVars['user']['language_id']==1){
	echo __('Forms');
	}
	else
	{
	echo __('Feuilles');
	}
	?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('managing_group_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	
	
	<?php 
	$len_form_name = 0;
	foreach ($forms as $form):
		if($this->viewVars['user']['language_id']==1){
		//debug(strlen($form['Form']['title']));
			if(strlen($form['Form']['title'])>$len_form_name){
				$len_form_name = strlen($form['Form']['title']);
		}
		}
		else
		{
		if(strlen($form['Form']['title_fr'])>$len_form_name){
		$len_form_name = strlen($form['Form']['title_fr']);
		}
		}
		
	endforeach;
	
	//debug($len_form_name);
	
	foreach ($forms as $form): ?>
	<tr>
		<td><?php echo h($form['Form']['id']); ?>&nbsp;</td>
		<td><?php 
		if($this->viewVars['user']['language_id']==1){
		$view_text="Add: ".str_pad($form['Form']['title'], $len_form_name,htmlspecialchars_decode("/ / "), STR_PAD_BOTH) ;
		echo h($form['Form']['title']);
		}
		else {
		$view_text="Add: ".str_pad($form['Form']['title_fr'], $len_form_name, "_", STR_PAD_BOTH) ;
		echo h($form['Form']['title_fr']);
		}
		 ?>&nbsp;</td>
		<td>
			<?php echo $form['ManagingGroup']['title']; ?>
		</td>
		<td class="actions">
			<?php 
			
			echo $this->Html->link(__($view_text), array('controller' => $form['Form']['form_model'], 'action' => 'add',$form['Form']['id'])); ?>
			
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

		<li><?php //echo $this->Html->link(__('Enter new data'), array('controller' => 'managing_groups', 'action' => 'index')); ?> </li>

	</ul>
</div>
