<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Task_Log_Cache_Get;

class Task_Log_Cache_GetTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Task_Log_Cache_Get'));
	}

	// @todo tests for \mjolnir\profile\Task_Log_Cache_Get

} # test
