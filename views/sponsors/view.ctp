<div class="sponsors view">
<h2><?php  __('Sponsor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Web'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['web']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image En'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['image_en']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image Fr'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sponsor['Sponsor']['image_fr']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sponsor', true), array('action' => 'edit', $sponsor['Sponsor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sponsor', true), array('action' => 'delete', $sponsor['Sponsor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sponsor['Sponsor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sponsors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sponsor', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Years', true), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year', true), array('controller' => 'years', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Years');?></h3>
	<?php if (!empty($sponsor['Year'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Year'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sponsor['Year'] as $year):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $year['id'];?></td>
			<td><?php echo $year['year'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'years', 'action' => 'view', $year['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'years', 'action' => 'edit', $year['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'years', 'action' => 'delete', $year['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $year['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Year', true), array('controller' => 'years', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
