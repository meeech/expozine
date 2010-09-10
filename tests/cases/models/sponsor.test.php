<?php
/* Sponsor Test cases generated on: 2010-09-10 00:09:20 : 1284091400*/
App::import('Model', 'Sponsor');

class SponsorTestCase extends CakeTestCase {
	var $fixtures = array('app.sponsor', 'app.year', 'app.exhibitor', 'app.sponsors_year');

	function startTest() {
		$this->Sponsor =& ClassRegistry::init('Sponsor');
	}

	function endTest() {
		unset($this->Sponsor);
		ClassRegistry::flush();
	}

}
?>