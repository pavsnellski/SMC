<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
    <?php
		//debug($this->Auth->user());
        echo $this->Form->input('username',array('id' => 'setfocus'));
        echo $this->Form->input('password');
		//echo $this->Form->checkbox('agree');
    ?>
	
    </fieldset>
	
<?php echo $this->Form->end(__('Login')); ?>
</div>
<script type="text/javascript">
$(document).ready(function(){
     $('#setfocus').focus()
});
</script>