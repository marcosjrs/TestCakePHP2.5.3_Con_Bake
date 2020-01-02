<div class="categoriaPlatos form">
<?php echo $this->Form->create('CategoriaPlato'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categoria Plato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>