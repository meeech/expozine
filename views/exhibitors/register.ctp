<div class="exhibitors form">
<?php echo $this->Form->create('Exhibitor');?>
	<fieldset>
 		<legend><?php __('Add Exhibitor'); ?></legend>
	<?php
		echo $this->Form->input('lang', array('type'=>'hidden','value'=>$lang));
		echo $this->Form->input('year_id', array('type'=>'hidden', 'value'=>$currentYear['Year']['id']));
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
		echo $this->Form->input('days', array(
		    'options' => array('sat'=>__('Saturday 20$',true),'sun'=>__('Sunday',true),'both'=>__('Saturday &amp; Sunday',true)),
		    'type' => 'radio'
            ));
		echo $this->Form->input('catlivres');
		echo $this->Form->input('cataffiche');
		echo $this->Form->input('catautre');
		echo $this->Form->input('twitter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
