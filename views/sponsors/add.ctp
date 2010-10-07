<div class="sponsors form">
<?php echo $this->Form->create('Sponsor',array('type'=>'file'));?>
	<fieldset>
 		<legend><?php __('Add Sponsor'); ?></legend>
	<?php
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
		<li><?php echo $this->Html->link(__('List Sponsors', true), array('action' => 'index'));?></li>
	</ul>
</div>