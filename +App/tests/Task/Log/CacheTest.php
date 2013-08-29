<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Task_Log_Cache;

class Task_Log_CacheTest extends \app\PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Task_Log_Cache'));
	}

	// @todo tests for \mjolnir\profile\Task_Log_Cache

} # test
