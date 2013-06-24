<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Cascading File System
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Task_Log_Cache_Get extends \app\Task_Base
{
	/**
	 * Execute task.
	 */
	function run()
	{
		$erase = $this->get('erase', false);

		$logpath = \app\Env::key('etc.path').'logs/cache.get.log';

		if ($erase || !\file_exists($logpath))
		{
			\file_put_contents($logpath, '');
		}

		\passthru("tail -f $logpath");
	}

} # class
