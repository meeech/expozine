<?php
/* SponsorsYears Test cases generated on: 2010-09-09 22:09:05 : 1284084545*/
App::import('Controller', 'SponsorsYears');

class TestSponsorsYearsController extends SponsorsYearsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SponsorsYearsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sponsors_year', 'app.sponsor', 'app.year', 'app.exhibitor');

	function startTest() {
		$this->SponsorsYears =& new TestSponsorsYearsController();
		$this->SponsorsYears->constructClasses();
	}

	function endTest() {
		unset($this->SponsorsYears);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>