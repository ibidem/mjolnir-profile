<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Task_Log_Queries;

class Task_Log_QueriesTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Task_Log_Queries'));
	}

	// @todo tests for \mjolnir\profile\Task_Log_Queries

} # test
