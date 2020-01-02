<div class="cocineros form">
<?php echo $this->Form->create('Cocinero'); ?>
	<fieldset>
		<legend><?php echo __('Add Cocinero'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('Plato');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
