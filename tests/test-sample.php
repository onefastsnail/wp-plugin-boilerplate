<?php

class SampleTest extends WP_UnitTestCase {

	function testSample() {
		// replace this with some actual testing code
		$this->assertTrue( true );
	}

	function testCurrentTimestamp() {
		
		//get our timestamp
		$value = \Acme\get_current_timestamp();

		$this->assertInternalType('int', $value);
	}

	function testGetTinyUrl() {
		
		//get our timestamp
		$url = 'http://www.pinkbike.com';
		$tiny_url = \Acme\get_tiny_url('http://www.pinkbike.com');

		$this->assertNotEquals($url, $tiny_url);
	}
}

