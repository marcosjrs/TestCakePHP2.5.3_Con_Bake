<div class="platos view">
<h2><?php echo __('Plato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Plato'); ?></dt>
		<dd>
			<?php echo $this->Html->link($plato['CategoriaPlato']['id'], array('controller' => 'categoria_platos', 'action' => 'view', $plato['CategoriaPlato']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($plato['Plato']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Cocineros'); ?></h3>
	<?php if (!empty($plato['Cocinero'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($plato['Cocinero'] as $cocinero): ?>
		<tr>
			<td><?php echo $cocinero['id']; ?></td>
			<td><?php echo $cocinero['nombre']; ?></td>
			<td><?php echo $cocinero['apellido']; ?></td>
			<td><?php echo $cocinero['created']; ?></td>
			<td><?php echo $cocinero['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cocineros', 'action' => 'view', $cocinero['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cocineros', 'action' => 'edit', $cocinero['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cocineros', 'action' => 'delete', $cocinero['id']), array("class"=>"btn btn-xs btn-danger"), __('Are you sure you want to delete # %s?', $cocinero['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
