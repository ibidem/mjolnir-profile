<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Profile
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Application extends next\Application
{
	/**
	 * @return static
	 */
	static function instance()
	{
		static $benchmarked = false;

		$benchmarked or \app\Benchmark::token(__CLASS__, 'Application', true);

		return parent::instance();
	}

} # class
