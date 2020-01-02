<div class="platos index">
	<div class="page-header"><h2><?php echo __('Platos'); ?></h2></div>
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_plato_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($platos as $plato): ?>
	<tr>
		<td><?php echo h($plato['Plato']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($plato['CategoriaPlato']['id'], array('controller' => 'categoria_platos', 'action' => 'view', $plato['CategoriaPlato']['id'])); ?>
		</td>
		<td><?php echo h($plato['Plato']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['precio']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['created']); ?>&nbsp;</td>
		<td><?php echo h($plato['Plato']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $plato['Plato']['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $plato['Plato']['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $plato['Plato']['id']), array("class"=>"btn btn-xs btn-danger"), __('Are you sure you want to delete # %s?', $plato['Plato']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array('btn btn-sm btn-info'), null, array('class' => 'prev btn btn-sm btn-info disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array('btn btn-sm btn-info'), null, array('class' => 'next btn btn-sm btn-info disabled'));
	?>
	</div>
</div>
