<?php
/* Group Fixture generated on: 2010-09-09 22:09:48 : 1284084528 */
class GroupFixture extends CakeTestFixture {
	var $name = 'Group';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 32, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'title' => array('column' => 'title', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => '4c899330-bed0-4603-ba2a-4222f591401e',
			'title' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>