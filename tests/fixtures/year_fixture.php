<?php
/* Year Fixture generated on: 2010-09-10 00:09:20 : 1284091400 */
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
			'id' => '4c89ae08-c1a8-4a2b-8f07-4d77f591401e',
			'year' => 1
		),
	);
}
?>