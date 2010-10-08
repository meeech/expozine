<!DOCTYPE "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <?php echo $this->element('head', array(
        'scripts_for_layout'=> $scripts_for_layout,
        'title_for_layout'=> $title_for_layout
    )); ?>

    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?3.2.0/build/cssreset/reset-min.css&3.2.0/build/cssfonts/fonts-min.css&3.2.0/build/cssgrids/grids-min.css&3.2.0/build/cssbase/base-min.css">
	<?php echo $this->Html->css('main'); ?>
	<style type="text/css" media="print">
	   .sidebar, .sponsors {
	       display:none;
	   }
	</style>
</head>
<style type="text/css" media="screen">
</style>

<body>
<div class="yui3-g">
    <div class="hd yui3-u-1">
		<h1><?php echo $this->Html->link(__('expozine', true), 'http://www.expozine.ca/'.$lang ); ?><span class="year">2010</span></h1>
    </div>
    <div class="bd yui3-u-3-4">
        <div class="content">
            <?php echo $this->Session->flash(); ?>
			<?php echo $content_for_layout; ?>
        </div>
    </div>
    <div class="sidebar yui3-u-1-4">
        <div class="content">
            <?php echo $this->element("nav")?>
        </div>
    </div>    
    <div class="yui3-u-1">
        <div class="content">
            <a name="sponsors"></a>
            <h2><?php __("This year's sponsors"); ?></h2>
            <?php 
            echo $this->element('sponsor/list', array('sponsors'=> $this->requestAction("/{$lang}/sponsors/random") )); 
            ?>
        </div>
    </div>
</div>

</body>
<?php echo $this->element('ga'); ?>
</html>
