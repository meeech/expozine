<?php
/* Exhibitor Test cases generated on: 2010-09-09 22:09:48 : 1284084528*/
App::import('Model', 'Exhibitor');

class ExhibitorTestCase extends CakeTestCase {
	var $fixtures = array('app.exhibitor', 'app.year');

	function startTest() {
		$this->Exhibitor =& ClassRegistry::init('Exhibitor');
	}

	function endTest() {
		unset($this->Exhibitor);
		ClassRegistry::flush();
	}

}
?>