<div class="categoriaPlatos form">
<?php echo $this->Form->create('CategoriaPlato'); ?>
	<fieldset class="form-group">
		<legend><?php echo __('Add Categoria Plato'); ?></legend>
	<?php
		echo $this->Form->input('categoria', array("class"=>"form-control"));
	?>
	</fieldset>
	<?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-primary', 'div' => false)); ?>
</div>