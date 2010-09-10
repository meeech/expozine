<div class="sponsors form">
<?php echo $this->Form->create('Sponsor');?>
	<fieldset>
 		<legend><?php __('Add Sponsor'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('web');
		echo $this->Form->input('image_en');
		echo $this->Form->input('image_fr');
		echo $this->Form->input('Year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sponsors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Years', true), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year', true), array('controller' => 'years', 'action' => 'add')); ?> </li>
	</ul>
</div>