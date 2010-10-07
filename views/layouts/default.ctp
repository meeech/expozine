<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2009, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php echo $this->element('head', array(
        'scripts_for_layout'=> $scripts_for_layout,
        'title_for_layout'=> $title_for_layout
    )); ?>
	<?php echo $this->Html->css('cake.generic'); ?>
<style type="text/css" media="screen">
#header div.actions {
    width: 100%;
}

#header div.actions ul li {
    display: inline-block;
    width: 200px;
}
</style>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><a href="<?php echo $this->Html->url('/',true).$lang ?>"><?php __('Expozine')?></a></h1>
            <?php if ($this->Session->read('Auth.User')): ?>                
			<div class="actions">
			    <ul>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller'=>'exhibitors', 'action'=>'index', 'language'=>$lang),true) ?>">
                            <?php __('Exhibitors')?>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $this->Html->url(array('controller'=>'sponsors', 'action'=>'index', 'language'=>$lang),true) ?>">
                            <?php __('Sponsors')?>
                        </a>
                    </li>

			        <li><a href="<?php echo $this->Html->url(array('controller'=>'users', 'action'=>'logout', 'language'=>$lang),true) ?>"><?php __('Logout')?></a></li>
			    </ul>
			</div>
            <?php endif ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
</body>
</html>