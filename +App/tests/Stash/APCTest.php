<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Stash_APC;

class Stash_APCTest extends \app\PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Stash_APC'));
	}

	// @todo tests for \mjolnir\profile\Stash_APC

} # test
