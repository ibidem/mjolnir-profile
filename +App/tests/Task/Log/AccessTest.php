<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Task_Log_Access;

class Task_Log_AccessTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Task_Log_Access'));
	}

	// @todo tests for \mjolnir\profile\Task_Log_Access

} # test
