<div class="platos index">
	<div class="page-header">
		<h2><?php echo __('Platos'); ?></h2>
	</div>

	<div class="row">
		<?php foreach ($platos as $plato): ?>
		<div class="col col-sm-3">
			<figure class="plato">
				<?php echo $this->Html->image('../files/plato/foto/' . $plato['Plato']['foto_dir'] . '/' . 'thumb_' .$plato['Plato']['foto'], array('url' => array('controller' => 'platos', 'action' => 'view', $plato['Plato']['id']))); ?>
			</figure>
			<br />
			<?php echo $this->Html->link($plato['Plato']['nombre'], array('action' => 'view', $plato['Plato']['id'])); ?>
			<br />
			<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
			<?php echo $this->Html->link($plato['CategoriaPlato']['categoria'], array('controller' => 'categoria_platos', 'action' => 'view', $plato['CategoriaPlato']['id']), array('class' => 'food-category')); ?>
			<br />
			<?php echo h($plato['Plato']['precio']); ?>€ &nbsp;
			<br />
			<br />
		</div>
		<?php endforeach; ?>
	</div>

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
