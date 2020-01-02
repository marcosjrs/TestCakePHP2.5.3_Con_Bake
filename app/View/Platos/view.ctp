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
			<?php echo $this->Html->link($plato['CategoriaPlato']['categoria'], array('controller' => 'categoria_platos', 'action' => 'view', $plato['CategoriaPlato']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Plato'), array('action' => 'edit', $plato['Plato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Plato'), array('action' => 'delete', $plato['Plato']['id']), array(), __('Are you sure you want to delete # %s?', $plato['Plato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Platos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Plato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Platos'), array('controller' => 'categoria_platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Plato'), array('controller' => 'categoria_platos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocineros Platos'), array('controller' => 'cocineros_platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocineros Plato'), array('controller' => 'cocineros_platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cocineros Platos'); ?></h3>
	<?php if (!empty($plato['CocinerosPlato'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cocinero Id'); ?></th>
		<th><?php echo __('Plato Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($plato['CocinerosPlato'] as $cocinerosPlato): ?>
		<tr>
			<td><?php echo $cocinerosPlato['id']; ?></td>
			<td><?php echo $cocinerosPlato['cocinero_id']; ?></td>
			<td><?php echo $cocinerosPlato['plato_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cocineros_platos', 'action' => 'view', $cocinerosPlato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cocineros_platos', 'action' => 'edit', $cocinerosPlato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cocineros_platos', 'action' => 'delete', $cocinerosPlato['id']), array(), __('Are you sure you want to delete # %s?', $cocinerosPlato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cocineros Plato'), array('controller' => 'cocineros_platos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
