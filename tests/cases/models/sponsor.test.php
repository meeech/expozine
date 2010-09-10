<?php
/* Sponsor Test cases generated on: 2010-09-09 22:09:48 : 1284084528*/
App::import('Model', 'Sponsor');

class SponsorTestCase extends CakeTestCase {
	var $fixtures = array('app.sponsor', 'app.year', 'app.sponsors_year');

	function startTest() {
		$this->Sponsor =& ClassRegistry::init('Sponsor');
	}

	function endTest() {
		unset($this->Sponsor);
		ClassRegistry::flush();
	}

}
?>