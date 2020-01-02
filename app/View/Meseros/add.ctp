<div class="meseros form">
<?php echo $this->Form->create('Mesero'); ?>
<fieldset class="form-group">
		<legend><?php echo __('Add Mesero'); ?></legend>
	<?php
		echo $this->Form->input('dni',array("class"=>"form-control"));
		echo $this->Form->input('nombre',array("class"=>"form-control"));
		echo $this->Form->input('apellido',array("class"=>"form-control"));
		echo $this->Form->input('telefono',array("class"=>"form-control"));
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-primary', 'div' => false)); ?>
</div>
