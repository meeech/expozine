<?php echo $this->element("register/{$lang}/instructions");?>
<div class="exhibitors form">
<?php echo $this->Form->create('Exhibitor', array('url'=>array('action'=>'register', 'language'=>$lang)));?>
	<fieldset>
	<?php
		echo $this->Form->input('lang', array('type'=>'hidden','value'=>$lang));
		echo $this->Form->input('year_id', array('type'=>'hidden', 'value'=>$currentYear['Year']['id']));
		echo $this->Form->input('title', array('label'=>__('Name', true)));
		echo $this->Form->input('contact', array('label'=>__('Contact Name', true)));
		echo $this->Form->input('email', array('label'=>__('E-mail', true)));
		echo $this->Form->input('phone', array('label'=>__('Phone Number', true)));
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('province', array('label'=>__('Province/State', true)));
		echo $this->Form->input('postal',array('label'=>__('Postal/Zip Code', true)));
		echo $this->Form->input('publish_address', array('checked'=> true, 'label'=>__('Publish address in Expozine brochure', true)));

		echo $this->Form->input('days', array(
		    'options' => array('sat'=>__('Saturday',true).' ($20)','sun'=>__('Sunday',true).' ($20)','both'=>__('Saturday &amp; Sunday',true).' ($35)'),
		    'type' => 'radio'
    		));
		echo $this->Form->input('web', array('label'=>__('Website', true)));
		
		?>
        <div>		  
		<?php

		echo $this->Form->input('publish_web',array('checked'=> true, 'label'=>__('Publish Website in Expozine brochure', true)));
        ?>
        </div>
        <div class="text">
	<label><? echo __('Category')?>:</label>
        <?php
		echo $this->Form->input('catlivres', array('label'=>__('Books/Zines', true)));
		echo $this->Form->input('cataffiche', array('label'=>__('Comics', true)));
		echo $this->Form->input('catautre', array('label'=>__('Other', true)));
		?>
        </div>
	</fieldset>
<?php echo $this->element("register/{$lang}/pre-submit-instructions");?>
<?php echo $this->Form->end(__('Register', true));?>
<?php echo $this->element("register/{$lang}/post-instructions");?>

</div>
