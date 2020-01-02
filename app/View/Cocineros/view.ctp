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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cocinero'), array('action' => 'edit', $cocinero['Cocinero']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cocinero'), array('action' => 'delete', $cocinero['Cocinero']['id']), array(), __('Are you sure you want to delete # %s?', $cocinero['Cocinero']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocineros'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocinero'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocineros Platos'), array('controller' => 'cocineros_platos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocineros Plato'), array('controller' => 'cocineros_platos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cocineros Platos'); ?></h3>
	<?php if (!empty($cocinero['CocinerosPlato'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cocinero Id'); ?></th>
		<th><?php echo __('Plato Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cocinero['CocinerosPlato'] as $cocinerosPlato): ?>
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
