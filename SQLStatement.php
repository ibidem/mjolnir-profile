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
		$baseconfig = \app\CFS::config('mjolnir/base');

		if ($baseconfig['development'])
		{
			$dbtoken = \app\Benchmark::token("database", 'Application');

			$idpos = \strpos($this->query, '--');
			$identity = \substr($this->query, $idpos + 2);
			$token = \app\Benchmark::token("<span title=\"{$this->query}\">$identity</span>", 'Database Queries');

			if ($baseconfig['logging']['devlogs'] && $baseconfig['logging']['short.sql.log'])
			{
				// extract sql query
				$thequery = \preg_replace('#[ ]{2,}#', ' ', \preg_replace('#[\t\n\r]#', ' ', \trim($this->query)));
				\preg_match('#^(SELECT|UPDATE|INSERT) #', $thequery, $match);

				// did we get match?
				if (isset($match[1]))
				{
					$querytype = \strtoupper($match[1]);
				}
				else # no match; MISC query
				{
					$querytype = 'Misc';
				}

				if ($querytype == 'SELECT')
				{
					$shortquery = '';

					// extra fields
					if (\preg_match('#^SELECT (.*) FROM#', $thequery, $match))
					{
						$shortquery .= \str_replace('`', '', $match[1]);

						// extract FROM
						if (\preg_match('#FROM ([^ ]*)( |$)#', $thequery, $match))
						{
							$shortquery .= ' FROM '.\str_replace('`', '', $match[1]);

							// try to extract LIMIT
							if (\preg_match('#LIMIT ([0-9]+)( |$)#', $thequery, $match))
							{
								$shortquery .= ' LIMIT '.$match[1];
							}

							// try to extract OFFSET
							if (\preg_match('#OFFSET ([0-9]+)( |$)#', $thequery, $match))
							{
								$shortquery .= ' OFFSET '.$match[1];
							}

							// extract where clause
							if (\preg_match('#WHERE (.*)#', $thequery, $match))
							{
								$shortquery .= ' WHERE '.\trim(\preg_replace('#--(.*)$#', '', \str_replace('`', '', $match[1])));
							}

							$logpath = \app\Env::key('etc.path').'logs/';
							$time = \date('Y-m-d H:i:s');

							// write short query
							$message = \sprintf
								(
									" %s --- %6s %s",
									$time,
									$querytype,
									$shortquery
								);

							\mjolnir\append_to_file
								(
									$logpath,
									'short.sql.log',
									PHP_EOL.$message
								);
						}
					}
				}
				else if ($querytype == 'UPDATE')
				{
					$shortquery = '';

					// extra fields
					if (\preg_match('#^UPDATE ([^ ]+)#', $thequery, $match))
					{
						$shortquery .= \str_replace('`', '', $match[1]);

						$logpath = \app\Env::key('etc.path').'logs/';
						$time = \date('Y-m-d H:i:s');

						// write short query
						$message = \sprintf
							(
								" %s --- %6s %s",
								$time,
								$querytype,
								$shortquery
							);

						\mjolnir\append_to_file
							(
								$logpath,
								'short.sql.log',
								PHP_EOL.$message
							);
					}
				}
				else if ($querytype == 'INSERT')
				{
					$shortquery = '';

					// extra fields
					if (\preg_match('#^INSERT INTO ([^ ]+)#', $thequery, $match))
					{
						$shortquery .= \str_replace('`', '', $match[1]);

						$logpath = \app\Env::key('etc.path').'logs/';
						$time = \date('Y-m-d H:i:s');

						// write short query
						$message = \sprintf
							(
								" %s --- %6s %s",
								$time,
								$querytype,
								$shortquery
							);

						\mjolnir\append_to_file
							(
								$logpath,
								'short.sql.log',
								PHP_EOL.$message
							);
					}
				}
				else # misc
				{
					$logpath = \app\Env::key('etc.path').'logs/';
						$time = \date('Y-m-d H:i:s');

						// write short query
						$message = \sprintf
							(
								" %s --- %s",
								$time,
								'Misc Query'
							);

						\mjolnir\append_to_file
							(
								$logpath,
								'short.sql.log',
								PHP_EOL.$message
							);
				}
			}

			try
			{
				$result = parent::run();
				\app\Benchmark::stop($token);
				\app\Benchmark::stop($dbtoken);
				return $result;
			}
			catch (\Exception $e)
			{
				\app\Benchmark::stop($token);
				\app\Benchmark::stop($dbtoken);
				throw $e;
			}
		}
		else # non-development
		{
			return parent::run();
		}
	}

} # class
