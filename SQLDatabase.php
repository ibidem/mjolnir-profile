<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Profile
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class SQLDatabase extends next\SQLDatabase
{
	/**
	 * ...
	 */
	protected function check_setup()
	{
		$token = $this->setup !== null ? \app\Benchmark::token('pdo:setup', 'Database Queries') : null;
		
		parent::check_setup();
		
		if ($token !== null)
		{
			\app\Benchmark::stop($token);
		}
	}

} # class
