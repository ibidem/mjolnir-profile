<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\SQLStatement;

class SQLStatementTest extends \app\PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\SQLStatement'));
	}

	// @todo tests for \mjolnir\profile\SQLStatement

} # test
