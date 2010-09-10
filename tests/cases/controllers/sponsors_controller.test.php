<?php
/* Sponsors Test cases generated on: 2010-09-09 22:09:05 : 1284084545*/
App::import('Controller', 'Sponsors');

class TestSponsorsController extends SponsorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SponsorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sponsor', 'app.year', 'app.exhibitor', 'app.sponsors_year');

	function startTest() {
		$this->Sponsors =& new TestSponsorsController();
		$this->Sponsors->constructClasses();
	}

	function endTest() {
		unset($this->Sponsors);
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