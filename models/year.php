<?php
class Year extends AppModel {
    var $displayField = 'year';
	var $name = 'Year';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Exhibitor' => array(
			'className' => 'Exhibitor',
			'foreignKey' => 'year_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


	var $hasAndBelongsToMany = array(
		'Sponsor' => array(
			'className' => 'Sponsor',
			'joinTable' => 'sponsors_years',
			'foreignKey' => 'year_id',
			'associationForeignKey' => 'sponsor_id',
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