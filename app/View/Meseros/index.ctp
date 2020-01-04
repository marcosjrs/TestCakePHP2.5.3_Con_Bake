<?php
/**
 * Configuración del helper Paginator según la pasada desde MeserosController
 * - Que actualice en el div con id contenedor-meseros
 * - Que muestre un preloader en  un div con id procesando, cada vez que paginemos...
 * - Que al terminar de hacer la carga de paginación se oculte el preloader de carga, con una animación de fadeout 
 */
$this->Paginator->options(
	array(
		'update' => '#contenedor-meseros',
		'before' => $this->Js->get('#procesando')->effect('fadeIn', array('buffer' => false)),
		'complete'=> $this->Js->get('#procesando')->effect('fadeOut', array('buffer' => false))
	)
)

?>

<div id="contenedor-meseros">

<div class="meseros index">
	<div class="page-header"><h2><?php echo __('Meseros'); ?></h2></div>	
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($meseros as $mesero): ?>
	<tr>
		<td><?php echo h($mesero['Mesero']['id']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['dni']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['created']); ?>&nbsp;</td>
		<td><?php echo h($mesero['Mesero']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $mesero['Mesero']['id']), array( "class"=>"btn btn-xs btn-primary"), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $mesero['Mesero']['id']), array( "class"=>"btn btn-xs btn-primary"), array( "class"=>"btn btn-xs btn-primary")); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $mesero['Mesero']['id']), array( "class"=>"btn btn-xs btn-danger"), __('Are you sure you want to delete # %s?', $mesero['Mesero']['id'])); ?>
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

<?php echo $this->Js->writeBuffer(); //para poder ejecutar los fadeIn y fadeOut de la barra de progreso... ?>

</div> <!-- end contenedor-meseros -->