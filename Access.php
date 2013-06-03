<?php namespace mjolnir\profile;

/**
 * @package    mjolnir
 * @category   Profile
 * @author     Ibidem Team
 * @copyright  (c) 2013, Ibidem Team
 * @license    https://github.com/ibidem/ibidem/blob/master/LICENSE.md
 */
class Access extends next\Access
{
	/**
	 * @return boolean status
	 */
	static function can($relay, array $context = null, $attribute = null, $user_role = null)
	{
		static $id = null;

		$logpath = \app\Env::key('etc.path').'logs/';
		
		if ($id === null)
		{
			$id = \base_convert(\crc32(\uniqid()), 10, 32);
			\mjolnir\append_to_file($logpath, 'access.log', PHP_EOL."-- start of $id");
		}

		$status = parent::can($relay, $context, $attribute, $user_role);

		$devlog = \app\CFS::config('mjolnir/base')['logging']['devlogs'];

		if ($devlog)
		{
			// compute context
			if ($context !== null)
			{
				$the_context = \app\Arr::implode
					(
						', ', $context,
						function ($i, $v)
							{
								if ( ! \is_array($v))
								{
									if (\is_string($v))
									{
										return "$i => '$v'";
									}
									else if (\is_null($v))
									{
										return "$i -> NULL";
									}
									else if (\is_object($v))
									{
										return "$i -> Object";
									}
									else # something else
									{
										return "$i => $v";
									}
								}
								else # $v is an array
								{
									// use of -> is intentional
									return "$i -> Array";
								}
							}
					);

				$the_context = "[ $the_context ]";
			}
			else # context is null
			{
				$the_context = '-';
			}

			$time = \date('Y-m-d H:i:s');
			
			$message = \sprintf
				(
					" %s --- %-7s | %7s | %-12s | %-30s | %s",
					$time,
					$id,
					$status ? 'ALLOWED' : 'DENIED',
					$user_role !== null ? $user_role : \app\Auth::role(),
					$relay . ($attribute !== null ? ' -> '.$attribute : ''),
					$the_context
				);

			\mjolnir\append_to_file($logpath, 'access.log', PHP_EOL.$message);
		}

		return $status;
	}

} # class
