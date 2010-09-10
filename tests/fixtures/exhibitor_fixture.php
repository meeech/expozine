<?php
/* Exhibitor Fixture generated on: 2010-09-10 00:09:20 : 1284091400 */
class ExhibitorFixture extends CakeTestFixture {
	var $name = 'Exhibitor';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'year_id' => array('type' => 'string', 'null' => false, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'contact' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone' => array('type' => 'string', 'null' => false, 'length' => 17, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'province' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'postal' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'web' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'publish_address' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'publish_web' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'verified' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'days' => array('type' => 'string', 'null' => false, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'catlivres' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'cataffiche' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'catautre' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'lang' => array('type' => 'string', 'null' => false, 'default' => 'en', 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array()
	);

	var $records = array(
		array(
			'id' => '4c89ae08-3b08-4af2-903e-4f26f591401e',
			'year_id' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'contact' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dol',
			'email' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'province' => 'Lorem ipsum dolor sit amet',
			'postal' => 'Lorem ip',
			'web' => 'Lorem ipsum dolor sit amet',
			'publish_address' => 1,
			'publish_web' => 1,
			'verified' => 1,
			'days' => 'Lo',
			'created' => '2010-09-10 00:03:20',
			'catlivres' => 1,
			'cataffiche' => 1,
			'catautre' => 1,
			'lang' => ''
		),
	);
}
?>