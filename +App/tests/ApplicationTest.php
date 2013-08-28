<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Application'));
	}

	// @todo tests for \mjolnir\profile\Application

} # test
