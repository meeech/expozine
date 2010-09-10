<?php
/* Exhibitor Test cases generated on: 2010-09-10 00:09:20 : 1284091400*/
App::import('Model', 'Exhibitor');

class ExhibitorTestCase extends CakeTestCase {
	var $fixtures = array('app.exhibitor', 'app.year', 'app.sponsor', 'app.sponsors_year');

	function startTest() {
		$this->Exhibitor =& ClassRegistry::init('Exhibitor');
	}

	function endTest() {
		unset($this->Exhibitor);
		ClassRegistry::flush();
	}

}
?>