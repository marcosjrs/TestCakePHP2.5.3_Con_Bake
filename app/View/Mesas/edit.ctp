<div class="mesas form">
<?php echo $this->Form->create('Mesa'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mesa'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mesero_id');
		echo $this->Form->input('serie');
		echo $this->Form->input('puestos');
		echo $this->Form->input('posicion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
