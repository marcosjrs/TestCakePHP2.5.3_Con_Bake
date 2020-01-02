<div class="cocineros index">
	<h2><?php echo __('Cocineros'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cocineros as $cocinero): ?>
	<tr>
		<td><?php echo h($cocinero['Cocinero']['id']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['created']); ?>&nbsp;</td>
		<td><?php echo h($cocinero['Cocinero']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cocinero['Cocinero']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cocinero['Cocinero']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cocinero['Cocinero']['id']), array(), __('Are you sure you want to delete # %s?', $cocinero['Cocinero']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
