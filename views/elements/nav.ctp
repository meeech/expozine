<!-- Main Name -->
<ul>
    <li><?php echo $this->Html->link(__('Home', true), '/'.$lang ); ?></li>
    <li><?php echo $this->Html->link(__('Register', true), array('controller'=>'exhibitors', 'action'=>'register') ); ?></li>
</ul>
<br>
<br>
<!-- Other historical pages-->
<ul>
    <li><a href="./2009.php">2009</a></li> 
    <li><a href="./awards-2008.php">Awards - 2008</a></li> 
    <li><a href="./2008.php">2008</a></li> 
	<li><a href="./awards-2007.php">Awards - 2007</a></li> 
    <li><a href="./2007.php">2007</a></li> 
	<li><a href="./2006.php">2006</a></li> 
	<li><a href="./awards-2006.php">Awards - 2006</a></li> 
	<li><a href="./2005.php">2005</a></li> 
	<li><a href="./awards-2005.php">Awards 2005</a></li> 
	<li><a href="./2004.php">2004</a></li> 
	<li><a href="./2003.php">2003</a></li> 
	<li><a href="./2002.php">2002</a></li> 
    <li><a href="./about.php">About</a></li> 
    
    <li><?php echo $this->Html->link(__d('nav','other_lang', true),  '/'.$altlang  ); ?></li>
</ul>

