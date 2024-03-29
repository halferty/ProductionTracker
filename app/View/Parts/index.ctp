<div class="parts index">
	<h2><?php echo __('Parts'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('part_no'); ?></th>
			<th><?php echo $this->Paginator->sort('rev'); ?></th>
			<th><?php echo $this->Paginator->sort('class'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('material_type'); ?></th>
			<th><?php echo $this->Paginator->sort('source'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_cost'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('package'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($parts as $part): ?>
	<tr>
		<td><?php echo h($part['Part']['id']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['part_no']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['rev']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['class']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['type']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['description']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['material_type']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['source']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['unit_cost']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['note']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['package']); ?>&nbsp;</td>
		<td><?php echo h($part['Part']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $part['Part']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $part['Part']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $part['Part']['id']), null, __('Are you sure you want to delete # %s?', $part['Part']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Part'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Kitparts'), array('controller' => 'kitparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kitpart'), array('controller' => 'kitparts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Mfgparts'), array('controller' => 'mfgparts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Mfgpart'), array('controller' => 'mfgparts', 'action' => 'add')); ?> </li>
	</ul>
</div>
