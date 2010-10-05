<!-- Main Name -->
<ul>
    <li><?php echo $this->Html->link(__d('nav', 'Home', true), '/'.$lang ); ?></li>
    <li><?php echo $this->Html->link(__d('nav', 'Register', true), array('controller'=>'exhibitors', 'action'=>'register', 'language'=>$lang) ); ?></li>
</ul>
<br>
<br>
<!-- Other historical pages-->
<ul>
    <li><a href="<?php echo $lang ?>/awards-2009"><?php __d('nav','Awards'); ?> - 2009</a></li> 
    <li><a href="<?php echo $lang ?>/2009">2009</a></li> 
    <li><a href="<?php echo $lang ?>/awards-2008"><?php __d('nav','Awards'); ?> - 2008</a></li> 
    <li><a href="<?php echo $lang ?>/2008">2008</a></li> 
	<li><a href="<?php echo $lang ?>/awards-2007"><?php __d('nav', 'Awards'); ?> - 2007</a></li> 
    <li><a href="<?php echo $lang ?>/2007">2007</a></li> 
	<li><a href="<?php echo $lang ?>/2006">2006</a></li> 
	<li><a href="<?php echo $lang ?>/awards-2006"><?php __d('nav', 'Awards'); ?> - 2006</a></li> 
	<li><a href="<?php echo $lang ?>/2005">2005</a></li> 
	<li><a href="<?php echo $lang ?>/awards-2005"><?php __d('nav', 'Awards'); ?> 2005</a></li> 
	<li><a href="<?php echo $lang ?>/2004">2004</a></li> 
	<li><a href="<?php echo $lang ?>/2003">2003</a></li> 
	<li><a href="<?php echo $lang ?>/2002">2002</a></li> 
    <li><a href="<?php echo $lang ?>/about"><?php __d('nav','About'); ?></a></li> 
</ul>
<br><br>
<ul>
    <li><?php echo $this->Html->link(__d('nav','other_lang', true),  '/'.$altlang  ); ?></li>
</ul>

