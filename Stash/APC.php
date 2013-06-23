<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Profile
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Stash_APC extends next\Stash_APC
{
	use \app\Trait_Stash_Profile;

	static $stashtype = 'APC';

} # class
