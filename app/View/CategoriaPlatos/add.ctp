<div class="categoriaPlatos form">
<?php echo $this->Form->create('CategoriaPlato'); ?>
	<fieldset>
		<legend><?php echo __('Add Categoria Plato'); ?></legend>
	<?php
		echo $this->Form->input('categoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categoria Platos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Platos'), array('controller' => 'platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plato'), array('controller' => 'platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
