<div class="exhibitors form">
<?php echo $this->Form->create('Exhibitor');?>
	<fieldset>
 		<legend><?php __('Add Exhibitor'); ?></legend>
	<?php
		echo $this->Form->input('year_id');
		echo $this->Form->input('title');
		echo $this->Form->input('contact');
		echo $this->Form->input('phonenum');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('prov');
		echo $this->Form->input('postal');
		echo $this->Form->input('web');
		echo $this->Form->input('publishaddy');
		echo $this->Form->input('publishweb');
		echo $this->Form->input('verified');
		echo $this->Form->input('days');
		echo $this->Form->input('catlivres');
		echo $this->Form->input('cataffiche');
		echo $this->Form->input('catautre');
		echo $this->Form->input('lang');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exhibitors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Years', true), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year', true), array('controller' => 'years', 'action' => 'add')); ?> </li>
	</ul>
</div>