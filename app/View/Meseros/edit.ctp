<div class="meseros form">
<?php echo $this->Form->create('Mesero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mesero'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dni');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('telefono');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
