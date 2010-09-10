<?php
/* Years Test cases generated on: 2010-09-09 22:09:06 : 1284084546*/
App::import('Controller', 'Years');

class TestYearsController extends YearsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class YearsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.year', 'app.exhibitor', 'app.sponsor', 'app.sponsors_year');

	function startTest() {
		$this->Years =& new TestYearsController();
		$this->Years->constructClasses();
	}

	function endTest() {
		unset($this->Years);
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