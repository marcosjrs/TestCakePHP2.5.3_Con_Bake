<div class="categoriaPlatos index">
	<div class="page-header"><h2><?php echo __('Categoria Platos'); ?></h2></div>
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categoriaPlatos as $categoriaPlato): ?>
	<tr>
		<td><?php echo h($categoriaPlato['CategoriaPlato']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoriaPlato['CategoriaPlato']['categoria']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriaPlato['CategoriaPlato']['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriaPlato['CategoriaPlato']['id']), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriaPlato['CategoriaPlato']['id']), array("class"=>"btn btn-xs btn-danger"), __('Are you sure you want to delete # %s?', $categoriaPlato['CategoriaPlato']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array('class'=>'btn btn-sm btn-info'), null, array('class' => 'prev btn btn-sm btn-info disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array('class'=>'btn btn-sm btn-info'), null, array('class' => 'next btn btn-sm btn-info disabled'));
	?>
	</div>
</div>
