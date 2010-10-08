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
 * @subpackage    cake.cake.libs.view.templates.layouts.email.html
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html>
<head>
	<title><?php echo $title_for_layout;?></title>
</head>

<body>
<style type="text/css" media="screen">
.receipt {
    font-size: 1.2em;
}

.receipt dl dd {
    border-bottom: 1px solid #ccc;
    display: inline-block;
    width: 60%; 
    padding-bottom: 10px;
}
.receipt dl dt {
    border-bottom: 1px solid #ccc;
    display: inline-block;
    width: 30%;
    padding: 10px 0 5px;
}
    
</style>
	<?php echo $content_for_layout;?>
</body>
</html>