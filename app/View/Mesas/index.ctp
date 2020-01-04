<div class="mesas index">
	<div class="page-header"><h2><?php echo __('Mesas'); ?></h2></div>	
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('mesero_id'); ?></th>
			<th><?php echo $this->Paginator->sort('serie'); ?></th>
			<th><?php echo $this->Paginator->sort('puestos'); ?></th>
			<th><?php echo $this->Paginator->sort('posicion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($mesas as $mesa): ?>
	<tr>
		<td><?php echo h($mesa['Mesa']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($mesa['Mesero']['nombre'], array('controller' => 'meseros', 'action' => 'view', $mesa['Mesero']['id'])); ?>
		</td>
		<td><?php echo h($mesa['Mesa']['serie']); ?>&nbsp;</td>
		<td><?php echo h($mesa['Mesa']['puestos']); ?>&nbsp;</td>
		<td><?php echo h($mesa['Mesa']['posicion']); ?>&nbsp;</td>
		<td><?php echo h($mesa['Mesa']['created']); ?>&nbsp;</td>
		<td><?php echo h($mesa['Mesa']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mesa['Mesa']['id']), array( "class"=>"btn btn-xs btn-primary"), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mesa['Mesa']['id']), array( "class"=>"btn btn-xs btn-primary"), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mesa['Mesa']['id']), array("class"=>"btn btn-xs btn-danger"), __('Are you sure you want to delete # %s?', $mesa['Mesa']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p class="float-left">
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	
	</p>	
	<div id="procesando" class="float-left" style="display: none">
		<div class="loader-procesando">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div> 	
	<nav class="clear-left">
		<ul class="pagination">
			<li><?php echo $this->Paginator->prev('< ' . __('previous'), array('tag'=>false), null, array('class' => 'prev disabled')); ?></li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li','currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li><?php echo $this->Paginator->next(__('next') . ' >', array('tag'=>false), null, array('class' => 'next disabled')); ?></li>
		</ul>
	</nav>
</div>
