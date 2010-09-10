<?php
/* Year Test cases generated on: 2010-09-09 22:09:49 : 1284084529*/
App::import('Model', 'Year');

class YearTestCase extends CakeTestCase {
	var $fixtures = array('app.year', 'app.exhibitor', 'app.sponsor', 'app.sponsors_year');

	function startTest() {
		$this->Year =& ClassRegistry::init('Year');
	}

	function endTest() {
		unset($this->Year);
		ClassRegistry::flush();
	}

}
?>