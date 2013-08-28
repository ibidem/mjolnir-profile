<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Stash;

class StashTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Stash'));
	}

	// @todo tests for \mjolnir\profile\Stash

} # test
