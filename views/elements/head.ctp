<?php echo $this->Html->charset(); ?>
<base href="<?php echo $this->Html->url('/',true); ?>" />
<title>
	<?php __('expozine'); ?>      
	<?php echo $title_for_layout; ?>
</title>
    <?php 
    echo $this->Html->meta('icon');
    echo $scripts_for_layout;
    ?>