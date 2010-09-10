<?php
class SponsorsYear extends AppModel {
	var $name = 'SponsorsYear';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Sponsor' => array(
			'className' => 'Sponsor',
			'foreignKey' => 'sponsor_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Year' => array(
			'className' => 'Year',
			'foreignKey' => 'year_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>