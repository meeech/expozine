<!-- Main Name -->
<ul>
    <li><?php echo $this->Html->link(__('Home', true), '/'.$lang ); ?></li>
    <li><?php echo $this->Html->link(__('Register', true), array('controller'=>'exhibitors', 'action'=>'register') ); ?></li>
</ul>
<br>
<br>
<!-- Other historical pages-->
<ul>
    <li><a href="<?php echo $lang ?>/2009">2009</a></li> 
    <li><a href="<?php echo $lang ?>/awards-2008">Awards - 2008</a></li> 
    <li><a href="<?php echo $lang ?>/2008">2008</a></li> 
	<li><a href="<?php echo $lang ?>/awards-2007">Awards - 2007</a></li> 
    <li><a href="<?php echo $lang ?>/2007">2007</a></li> 
	<li><a href="<?php echo $lang ?>/2006">2006</a></li> 
	<li><a href="<?php echo $lang ?>/awards-2006">Awards - 2006</a></li> 
	<li><a href="<?php echo $lang ?>/2005">2005</a></li> 
	<li><a href="<?php echo $lang ?>/awards-2005">Awards 2005</a></li> 
	<li><a href="<?php echo $lang ?>/2004">2004</a></li> 
	<li><a href="<?php echo $lang ?>/2003">2003</a></li> 
	<li><a href="<?php echo $lang ?>/2002">2002</a></li> 
    <li><a href="<?php echo $lang ?>/about">About</a></li> 
    
    <li><?php echo $this->Html->link(__d('nav','other_lang', true),  '/'.$altlang  ); ?></li>
</ul>

