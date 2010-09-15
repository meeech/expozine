<?php
/* Exhibitors Test cases generated on: 2010-09-14 19:09:09 : 1284508569*/
App::import('Controller', 'Exhibitors');

class TestExhibitorsController extends ExhibitorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ExhibitorsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.exhibitor');

	function startTest() {
		$this->Exhibitors =& new TestExhibitorsController();
		$this->Exhibitors->constructClasses();
	}

	function endTest() {
		unset($this->Exhibitors);
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