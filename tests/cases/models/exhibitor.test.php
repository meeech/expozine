<?php
/* Exhibitor Test cases generated on: 2010-09-14 19:09:52 : 1284508552*/
App::import('Model', 'Exhibitor');

class ExhibitorTestCase extends CakeTestCase {
	var $fixtures = array('app.exhibitor');

	function startTest() {
		$this->Exhibitor =& ClassRegistry::init('Exhibitor');
	}

	function endTest() {
		unset($this->Exhibitor);
		ClassRegistry::flush();
	}

}
?>