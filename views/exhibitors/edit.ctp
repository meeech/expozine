<div class="exhibitors form">
<?php echo $this->Form->create('Exhibitor');?>
	<fieldset>
 		<legend><?php __('Edit Exhibitor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year_id');
		echo $this->Form->input('title');
		echo $this->Form->input('contact');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('province');
		echo $this->Form->input('postal');
		echo $this->Form->input('web');
		echo $this->Form->input('publish_address');
		echo $this->Form->input('publish_web');
		echo $this->Form->input('verified');
		echo $this->Form->input('days');
		echo $this->Form->input('catlivres');
		echo $this->Form->input('cataffiche');
		echo $this->Form->input('catautre');
		echo $this->Form->input('lang');
		echo $this->Form->input('twitter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Exhibitor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Exhibitor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Exhibitors', true), array('action' => 'index'));?></li>
        <!-- <li><?php echo $this->Html->link(__('List Years', true), array('controller' => 'years', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Year', true), array('controller' => 'years', 'action' => 'add')); ?> </li> -->
	</ul>
</div>