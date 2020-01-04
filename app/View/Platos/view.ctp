<?php echo $this->Html->script( array('addtocart.js'), array('inline' => false) ); ?>	
	
	<h1><?php echo $plato['Plato']['nombre']; ?></h1>

<div class="row">

	<div class="col col-sm-7">
			<?php echo $this->Html->image('../files/plato/foto/' . $plato['Plato']['foto_dir'] . '/' . 'vga_' .$plato['Plato']['foto'], array('class' => 'img-thumbnail img-responsive')); ?>
	</div>

	<div class="col col-sm-5">

		<strong><?php echo $plato['Plato']['nombre']; ?></strong>

		<br />
		<br />

		<span id="productprice"><?php echo h($plato['Plato']['precio']); ?></span>€

		<br />
		<br />

		Descripción: <?php echo h($plato['Plato']['descripcion']); ?>

		<br />
		<br />

		Creado: <?php echo $plato['Plato']['created']; ?>

		<br />
		<br />

		Modificado: <?php echo $plato['Plato']['modified']; ?>
		<br />
		<br />

		Categoría: <?php echo $this->Html->link($plato['CategoriaPlato']['categoria'], array('controller' => 'categoria_platos', 'action' => 'view', $plato['CategoriaPlato']['id'])); ?>
		<br />
		<br />
		<div class="btn-group">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		    <?php echo __('Actions'); ?> <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu">
			<li><?php echo $this->Html->link(__('Edit Plato'), array('action' => 'edit', $plato['Plato']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Plato'), array('action' => 'delete', $plato['Plato']['id']), array(), __('Are you sure you want to delete # %s?', $plato['Plato']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Platos'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Plato'), array('action' => 'add')); ?> </li>
		    <li class="divider"></li>
			<li><?php echo $this->Html->link(__('List Categoria Platos'), array('controller' => 'categoria_platos', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Categoria Plato'), array('controller' => 'categoria_platos', 'action' => 'add')); ?> </li>
		    <li class="divider"></li>
			<li><?php echo $this->Html->link(__('List Cocineros'), array('controller' => 'cocineros', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add')); ?> </li>
		  </ul>
		</div>

	</div>

</div>



<div class="related">
	<h3><?php echo __('Related Cocineros'); ?></h3>
	<?php if (!empty($plato['Cocinero'])): ?>
	<div class="col-md-12">
		<table class="table table-striped">
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Nombre'); ?></th>
				<th><?php echo __('Apellido'); ?></th>
				<th><?php echo __('Created'); ?></th>
				<th><?php echo __('Modified'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($plato['Cocinero'] as $cocinero): ?>
				<tr>
					<td><?php echo $cocinero['id']; ?></td>
					<td><?php echo $cocinero['nombre']; ?></td>
					<td><?php echo $cocinero['apellido']; ?></td>
					<td><?php echo $cocinero['created']; ?></td>
					<td><?php echo $cocinero['modified']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'cocineros', 'action' => 'view', $cocinero['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'cocineros', 'action' => 'edit', $cocinero['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cocineros', 'action' => 'delete', $cocinero['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $cocinero['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('New Cocinero'), array('controller' => 'cocineros', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?>
	</div>
</div>