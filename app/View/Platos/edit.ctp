<div class="platos form">
<?php echo $this->Form->create('Plato'); ?>
	<fieldset>
		<legend><?php echo __('Edit Plato'); ?></legend>
	<?php
		echo $this->Form->input('id', array("class"=>"form-control"));
		echo $this->Form->input('categoria_plato_id', array("class"=>"form-control"));
		echo $this->Form->input('nombre', array("class"=>"form-control"));
		echo $this->Form->input('descripcion', array("class"=>"form-control"));
		echo $this->Form->input('precio', array("class"=>"form-control"));
		echo $this->Form->input('Cocinero', array("class"=>"form-control"));
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-primary', 'div' => false)); ?>
</div>
