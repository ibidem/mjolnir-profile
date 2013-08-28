<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Stash_File;

class Stash_FileTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Stash_File'));
	}

	// @todo tests for \mjolnir\profile\Stash_File

} # test
