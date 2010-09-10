<?php
class Sponsor extends AppModel {
	var $name = 'Sponsor';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Year' => array(
			'className' => 'Year',
			'joinTable' => 'sponsors_years',
			'foreignKey' => 'sponsor_id',
			'associationForeignKey' => 'year_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>