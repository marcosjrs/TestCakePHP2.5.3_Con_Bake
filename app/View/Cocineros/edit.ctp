<div class="cocineros form">
<?php echo $this->Form->create('Cocinero'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cocinero'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cocinero.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cocinero.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cocineros'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Cocineros Platos'), array('controller' => 'cocineros_platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocineros Plato'), array('controller' => 'cocineros_platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
