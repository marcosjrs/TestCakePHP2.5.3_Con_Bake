<div class="cocineros form">
<?php echo $this->Form->create('Cocinero'); ?>
	<fieldset>
		<legend><?php echo __('Add Cocinero'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cocineros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cocineros Platos'), array('controller' => 'cocineros_platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocineros Plato'), array('controller' => 'cocineros_platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
