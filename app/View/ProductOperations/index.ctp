<div class="productOperations index">
	<h2><?php echo __('Product Operations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('operation_id'); ?></th>
			<th><?php echo $this->Paginator->sort('associated_document'); ?></th>
			<th><?php echo $this->Paginator->sort('process_priority'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($productOperations as $productOperation): ?>
	<tr>
		<td><?php echo h($productOperation['ProductOperation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productOperation['Product']['product_no'], array('controller' => 'products', 'action' => 'view', $productOperation['Product']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productOperation['Operation']['name'], array('controller' => 'operations', 'action' => 'view', $productOperation['Operation']['id'])); ?>
		</td>
		<td><?php echo h($productOperation['ProductOperation']['associated_document']); ?>&nbsp;</td>
		<td><?php echo h($productOperation['ProductOperation']['process_priority']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productOperation['ProductOperation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productOperation['ProductOperation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productOperation['ProductOperation']['id']), null, __('Are you sure you want to delete # %s?', $productOperation['ProductOperation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product Operation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
