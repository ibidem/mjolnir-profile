<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Stash_Memcached;

class Stash_MemcachedTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\class_exists('\mjolnir\profile\Stash_Memcached'));
	}

	// @todo tests for \mjolnir\profile\Stash_Memcached

} # test
