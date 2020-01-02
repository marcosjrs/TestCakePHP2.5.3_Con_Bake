<div class="cocineros view">
<h2><?php echo __('Cocinero'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cocinero['Cocinero']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cocinero['Cocinero']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($cocinero['Cocinero']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cocinero['Cocinero']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cocinero['Cocinero']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Platos'); ?></h3>
	<?php if (!empty($cocinero['Plato'])): ?>
	<table class="table table-striped">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Categoria Plato Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Precio'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cocinero['Plato'] as $plato): ?>
		<tr>
			<td><?php echo $plato['id']; ?></td>
			<td><?php echo $plato['categoria_plato_id']; ?></td>
			<td><?php echo $plato['nombre']; ?></td>
			<td><?php echo $plato['descripcion']; ?></td>
			<td><?php echo $plato['precio']; ?></td>
			<td><?php echo $plato['created']; ?></td>
			<td><?php echo $plato['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'platos', 'action' => 'view', $plato['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'platos', 'action' => 'edit', $plato['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'platos', 'action' => 'delete', $plato['id']), array("class"=>"btn btn-xs btn-danger"), __('Are you sure you want to delete # %s?', $plato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
