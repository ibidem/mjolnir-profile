<?php namespace mjolnir\profile\tests;

use \mjolnir\profile\Trait_Stash_Profile;

class Trait_Stash_Profile_Tester
{
	use Trait_Stash_Profile;
}

class Trait_Stash_ProfileTest extends \PHPUnit_Framework_TestCase
{
	/** @test */ function
	can_be_loaded()
	{
		$this->assertTrue(\trait_exists('\mjolnir\profile\Trait_Stash_Profile'));
	}

	// @todo tests for \mjolnir\profile\Trait_Stash_Profile

} # test
