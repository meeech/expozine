<?php
/* SponsorsYear Test cases generated on: 2010-09-10 00:09:20 : 1284091400*/
App::import('Model', 'SponsorsYear');

class SponsorsYearTestCase extends CakeTestCase {
	var $fixtures = array('app.sponsors_year', 'app.sponsor', 'app.year', 'app.exhibitor');

	function startTest() {
		$this->SponsorsYear =& ClassRegistry::init('SponsorsYear');
	}

	function endTest() {
		unset($this->SponsorsYear);
		ClassRegistry::flush();
	}

}
?>