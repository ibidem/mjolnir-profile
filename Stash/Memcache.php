<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Profile
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Stash_Memcache extends next\Stash_Memcache
{
	use \app\Trait_Stash_Profile;

	static $stashtype = 'Memcache';

} # class
