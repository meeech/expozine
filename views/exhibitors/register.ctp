<div class="exhibitors form">
<?php echo $this->Form->create('Exhibitor');?>
	<fieldset>
	<?php
		echo $this->Form->input('lang', array('type'=>'hidden','value'=>$lang));
		echo $this->Form->input('year_id', array('type'=>'hidden', 'value'=>$currentYear['Year']['id']));
		echo $this->Form->input('title', array('label'=>__('Name', true)));
		echo $this->Form->input('contact', array('label'=>__('Contact Name', true)));
		echo $this->Form->input('phone', array('label'=>__('Phone Number', true)));
		echo $this->Form->input('email', array('label'=>__('E-mail', true)));
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('province', array('label'=>__('Province/State', true)));
		echo $this->Form->input('postal',array('label'=>__('Postal/Zip Code', true)));
		echo $this->Form->input('web', array('label'=>__('Website', true)));
		echo $this->Form->input('publish_address', array('label'=>__('Publish address in Expozine brochure', true)));
		echo $this->Form->input('publish_web',array('label'=>__('Publish Website in Expozine brochure', true)));
		echo $this->Form->input('days', array(
		    'options' => array('sat'=>__('Saturday',true).' ($20)','sun'=>__('Sunday',true).' ($20)','both'=>__('Saturday &amp; Sunday',true).' ($35)'),
		    'type' => 'radio'
            ));
		echo $this->Form->input('catlivres', array('label'=>__('Books/Zines', true)));
		echo $this->Form->input('cataffiche', array('label'=>__('Posters', true)));
		echo $this->Form->input('catautre', array('label'=>__('Other', true)));
        // echo $this->Form->input('twitter');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Register', true));?>
</div>
