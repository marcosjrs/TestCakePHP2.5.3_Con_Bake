<div class="mesas form">
<?php echo $this->Form->create('Mesa'); ?>
	<fieldset class="form-group">
		<legend><?php echo __('Edit Mesa'); ?></legend>
	<?php
		echo $this->Form->input('id',array("class"=>"form-control"));
		echo $this->Form->input('mesero_id',array("class"=>"form-control"));
		echo $this->Form->input('serie',array("class"=>"form-control"));
		echo $this->Form->input('puestos',array("class"=>"form-control"));
		echo $this->Form->input('posicion',array("class"=>"form-control"));
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-primary', 'div' => false)); ?>
</div>
