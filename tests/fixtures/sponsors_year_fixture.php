<?php
/* SponsorsYear Fixture generated on: 2010-09-09 22:09:48 : 1284084528 */
class SponsorsYearFixture extends CakeTestFixture {
	var $name = 'SponsorsYear';

	var $fields = array(
		'sponsor_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'year_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('sponsor_id' => array('column' => 'sponsor_id', 'unique' => 0), 'year_id' => array('column' => 'year_id', 'unique' => 0)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'sponsor_id' => 'Lorem ipsum dolor sit amet',
			'year_id' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>