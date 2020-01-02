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
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Plato.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Plato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Platos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Platos'), array('controller' => 'categoria_platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Plato'), array('controller' => 'categoria_platos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocineros Platos'), array('controller' => 'cocineros_platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocineros Plato'), array('controller' => 'cocineros_platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
