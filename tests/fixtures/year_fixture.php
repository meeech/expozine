<?php
/* Year Fixture generated on: 2010-09-09 22:09:49 : 1284084529 */
class YearFixture extends CakeTestFixture {
	var $name = 'Year';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'year' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 4),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => '4c899331-8b4c-4ba0-a1f5-4a7af591401e',
			'year' => 1
		),
	);
}
?>