<div class="sponsors form">
<?php echo $this->Form->create('Sponsor',array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Edit Sponsor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('web');
		echo $form->input('image_en_file', array('type'=>'file'));
        echo $form->input('image_en', array('type'=>'hidden'));
		echo $form->input('image_fr_file', array('type'=>'file'));
        echo $form->input('image_fr', array('type'=>'hidden'));
		echo $this->Form->input('Year');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Sponsor.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Sponsor.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sponsors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Years', true), array('controller' => 'years', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year', true), array('controller' => 'years', 'action' => 'add')); ?> </li>
	</ul>
</div>