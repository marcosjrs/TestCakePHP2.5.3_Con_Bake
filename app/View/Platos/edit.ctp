<div class="platos form">
<?php echo $this->Form->create('Plato'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria_plato_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('precio');
		echo $this->Form->input('Cocinero');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
