<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Profile
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
trait Trait_Stash_Profile
{
	/**
	 * Retrieves data from $key
	 *
	 * @return mixed data or default
	 */
	function get($key, $default = null)
	{
		if (\app\CFS::config('mjolnir/base')['development'])
		{
			$logpath = \app\Env::key('etc.path').'logs/';

			if (\app\Stash::$logid === null)
			{
				\app\Stash::$logid = \base_convert(\crc32(\uniqid()), 10, 32);
			}

			if ( ! \app\Stash::$getlogwrite)
			{
				\app\Stash::$getlogwrite = true;
				\mjolnir\append_to_file
					(
						$logpath,
						'cache.get.log',
						PHP_EOL.'-- started '.\app\Stash::$logid
					);
			}

			$time = \date('Y-m-d H:i:s');

			$message = \sprintf
				(
					" %s --- %-11s | %9s | %3s | %s",
					$time,
					\app\Stash::$logid.':'.\app\Stash::$opidx++,
					static::$stashtype,
					'GET',
					$key
				);

			\mjolnir\append_to_file
				(
					$logpath,
					'cache.get.log',
					PHP_EOL.$message
				);
		}

		return parent::get($key, $default);
	}

	/**
	 * ...
	 */
	function store($key, $data, array $tags = [], $expires = null)
	{
		if (\app\CFS::config('mjolnir/base')['development'])
		{
			$logpath = \app\Env::key('etc.path').'logs/';

			if (\app\Stash::$logid === null)
			{
				\app\Stash::$logid = \base_convert(\crc32(\uniqid()), 10, 32);
			}

			if ( ! \app\Stash::$logwrite)
			{
				\app\Stash::$logwrite = true;
				\mjolnir\append_to_file
					(
						$logpath,
						'cache.log',
						PHP_EOL.'-- started '.\app\Stash::$logid
					);
			}

			$time = \date('Y-m-d H:i:s');

			$tagpart = '';
			if ( ! empty($tags))
			{
				$tagpart = '>> '.\implode(', ', $tags);
			}

			$message = \sprintf
				(
					" %s --- %-11s | %9s | %10s | %s %s",
					$time,
					\app\Stash::$logid.':'.\app\Stash::$opidx++,
					static::$stashtype,
					'STORE Key',
					$key,
					$tagpart
				);

			\mjolnir\append_to_file
				(
					$logpath,
					'cache.log',
					PHP_EOL.$message
				);
		}

		parent::store($key, $data, $tags, $expires);
	}

	/**
	 * ...
	 */
	function purge(array $tags)
	{
		if (\app\CFS::config('mjolnir/base')['development'])
		{
			$logpath = \app\Env::key('etc.path').'logs/';

			if (\app\Stash::$logid === null)
			{
				\app\Stash::$logid = \base_convert(\crc32(\uniqid()), 10, 32);
			}

			if ( ! \app\Stash::$logwrite)
			{
				\app\Stash::$logwrite = true;
				\mjolnir\append_to_file
					(
						$logpath,
						'cache.log',
						PHP_EOL.'-- started '.\app\Stash::$logid
					);
			}

			$time = \date('Y-m-d H:i:s');

			foreach ($tags as $tag)
			{
				$message = \sprintf
					(
						" %s --- %-11s | %9s | %10s | %s",
						$time,
						\app\Stash::$logid.':'.\app\Stash::$opidx++,
						static::$stashtype,
						'DELETE Tag',
						$tag
					);

				\mjolnir\append_to_file
					(
						$logpath,
						'cache.log',
						PHP_EOL.$message
					);

				parent::purge([$tag]);
			}
		}
		else # non-development
		{
			parent::purge($tags);
		}
	}

	/**
	 * ...
	 */
	function delete($key)
	{
		if (\app\CFS::config('mjolnir/base')['development'])
		{
			$logpath = \app\Env::key('etc.path').'logs/';

			if (\app\Stash::$logid === null)
			{
				\app\Stash::$logid = \base_convert(\crc32(\uniqid()), 10, 32);
			}

			if ( ! \app\Stash::$logwrite)
			{
				\app\Stash::$logwrite = true;
				\mjolnir\append_to_file
					(
						$logpath,
						'cache.log',
						PHP_EOL.'-- started '.\app\Stash::$logid
					);
			}

			$time = \date('Y-m-d H:i:s');

			$message = \sprintf
				(
					" %s --- %-11s | %9s | %10s | %s",
					$time,
					\app\Stash::$logid.':'.\app\Stash::$opidx++,
					static::$stashtype,
					'DELETE Key',
					$key
				);

			\mjolnir\append_to_file
				(
					$logpath,
					'cache.log',
					PHP_EOL.$message
				);
		}

		parent::delete($key);
	}

} # trait
