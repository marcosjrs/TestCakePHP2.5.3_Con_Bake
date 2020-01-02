<div class="cocineros form">
<?php echo $this->Form->create('Cocinero'); ?>
	<fieldset class="form-group">
		<legend><?php echo __('Edit Cocinero'); ?></legend>
	<?php
		echo $this->Form->input('id', array("class"=>"form-control"));
		echo $this->Form->input('nombre', array("class"=>"form-control"));
		echo $this->Form->input('apellido', array("class"=>"form-control"));
		echo $this->Form->input('Plato', array("class"=>"form-control"));
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-primary', 'div' => false)); ?>
</div>