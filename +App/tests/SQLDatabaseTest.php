<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\SQLDatabase;

class SQLDatabaseTest extends \app\PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\SQLDatabase'));
	}

	// @todo tests for \mjolnir\profile\SQLDatabase

} # test
