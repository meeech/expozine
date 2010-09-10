<?php
/* SponsorsYear Test cases generated on: 2010-09-09 22:09:48 : 1284084528*/
App::import('Model', 'SponsorsYear');

class SponsorsYearTestCase extends CakeTestCase {
	var $fixtures = array('app.sponsors_year', 'app.sponsor', 'app.year');

	function startTest() {
		$this->SponsorsYear =& ClassRegistry::init('SponsorsYear');
	}

	function endTest() {
		unset($this->SponsorsYear);
		ClassRegistry::flush();
	}

}
?>