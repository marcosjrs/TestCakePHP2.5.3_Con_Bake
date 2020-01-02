<div class="categoriaPlatos view">
<h2><?php echo __('Categoria Plato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriaPlato['CategoriaPlato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($categoriaPlato['CategoriaPlato']['categoria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria Plato'), array('action' => 'edit', $categoriaPlato['CategoriaPlato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria Plato'), array('action' => 'delete', $categoriaPlato['CategoriaPlato']['id']), array(), __('Are you sure you want to delete # %s?', $categoriaPlato['CategoriaPlato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Platos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Plato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Platos'), array('controller' => 'platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plato'), array('controller' => 'platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Platos'); ?></h3>
	<?php if (!empty($categoriaPlato['Plato'])): ?>
	<table cellpadding = "0" cellspacing = "0">
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
	<?php foreach ($categoriaPlato['Plato'] as $plato): ?>
		<tr>
			<td><?php echo $plato['id']; ?></td>
			<td><?php echo $plato['categoria_plato_id']; ?></td>
			<td><?php echo $plato['nombre']; ?></td>
			<td><?php echo $plato['descripcion']; ?></td>
			<td><?php echo $plato['precio']; ?></td>
			<td><?php echo $plato['created']; ?></td>
			<td><?php echo $plato['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'platos', 'action' => 'view', $plato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'platos', 'action' => 'edit', $plato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'platos', 'action' => 'delete', $plato['id']), array(), __('Are you sure you want to delete # %s?', $plato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Plato'), array('controller' => 'platos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
