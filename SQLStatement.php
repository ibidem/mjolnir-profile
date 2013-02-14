<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Profile
 * @author     Ibidem Team
 * @copyright  (c) 2012 Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class SQLStatement extends next\SQLStatement
{
	function run()
	{
		$idpos = \strpos($this->query, '--');
		$identity = \substr($this->query, $idpos + 2);
		$token = \app\Benchmark::token("<span title=\"{$this->query}\">$identity</span>", 'Database Queries');
		
		try
		{
			$result = parent::run();
			\app\Benchmark::stop($token);
			return $result;
		}
		catch (\Exception $e)
		{
			\app\Benchmark::stop($token);
			throw $e;
		}
	}
	
} # class