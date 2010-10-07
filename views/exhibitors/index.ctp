<div class="exhibitors index">
	<h2><?php __('Exhibitors');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
        <th><?php echo $this->Paginator->sort('verified');?></th>
    	<th><?php echo $this->Paginator->sort('year_id');?></th>
        <th><?php echo $this->Paginator->sort('title');?></th>
        <th><?php echo $this->Paginator->sort('contact');?></th>
        <th><?php echo $this->Paginator->sort('phone');?></th>
        <th><?php echo $this->Paginator->sort('email');?></th>
        <th><?php echo $this->Paginator->sort('address');?></th>
        <th><?php echo $this->Paginator->sort('city');?></th>
        <th><?php echo $this->Paginator->sort('province');?></th>
        <th><?php echo $this->Paginator->sort('postal');?></th>
        <th><?php echo $this->Paginator->sort('web');?></th>
        <th><?php echo $this->Paginator->sort('publish_address');?></th>
        <th><?php echo $this->Paginator->sort('publish_web');?></th>
        <th><?php echo $this->Paginator->sort('days');?></th>
        <th><?php echo $this->Paginator->sort('created');?></th>
        <th><?php echo $this->Paginator->sort('lang');?></th>
        <th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($exhibitors as $exhibitor):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
	    <td><?php echo ($exhibitor['Exhibitor']['verified']) ? 'Yes' : 'No'; ?></td>
		<td>
        	<?php echo $this->Html->link($exhibitor['Year']['year'], array('controller' => 'years', 'action' => 'view', $exhibitor['Year']['id'])); ?>
        </td>
		<td><?php echo $exhibitor['Exhibitor']['title']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['contact']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['phone']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['email']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['address']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['city']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['province']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['postal']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['web']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['publish_address']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['publish_web']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['days']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['created']; ?>&nbsp;</td>
		<td><?php echo $exhibitor['Exhibitor']['lang']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $exhibitor['Exhibitor']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $exhibitor['Exhibitor']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $exhibitor['Exhibitor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $exhibitor['Exhibitor']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Exhibitor', true), array('action' => 'add')); ?></li>
	</ul>
</div>