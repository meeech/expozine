<!DOCTYPE "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <?php echo $this->element('head', array(
        'scripts_for_layout'=> $scripts_for_layout,
        'title_for_layout'=> $title_for_layout
    )); ?>

    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/combo?3.2.0/build/cssreset/reset-min.css&3.2.0/build/cssfonts/fonts-min.css&3.2.0/build/cssgrids/grids-min.css&3.2.0/build/cssbase/base-min.css">
	<?php echo $this->Html->css('main'); ?>
</head>
<style type="text/css" media="screen">
div.hd {
    padding-bottom: 60px;
}
div.hd h1 {
    font-family: helvetica,arial,sans-serif;
    font-size: 10em;
    padding: 0px;
    margin: 0px;
    line-height: .7em;
    letter-spacing: -.1em;
    
}

h1 span.year {
    padding-left: 10px;
    font-family: helvetica,arial,sans-serif;
    letter-spacing: -.05em;
    font-size: .4em;
}

div.hd a {
    color: #333;
    text-decoration: none;
}
</style>

<body>
<div class="yui3-g">
    <div class="hd yui3-u-1">
		<h1><?php echo $this->Html->link(__('expozine', true), 'http://www.expozine.ca/'.$lang ); ?><span class="year">2010</span></h1>
    </div>
    <div class="content yui3-u-3-4">
        Content
    </div>
    <div class="sidebar yui3-u-1-4">
        Nav
    </div>
</div>
</body>
<?php echo $this->element('ga'); ?>
</html>
