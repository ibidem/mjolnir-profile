<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Access;

class AccessTest extends \app\PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Access'));
	}

	// @todo tests for \mjolnir\profile\Access

} # test
