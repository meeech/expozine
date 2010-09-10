<?php
/* Year Test cases generated on: 2010-09-10 00:09:20 : 1284091400*/
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