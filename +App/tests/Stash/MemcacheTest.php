<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Stash_Memcache;

class Stash_MemcacheTest extends \app\PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Stash_Memcache'));
	}

	// @todo tests for \mjolnir\profile\Stash_Memcache

} # test
