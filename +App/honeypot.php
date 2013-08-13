<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\profile'


class Access extends \mjolnir\profile\Access
{
}

/**
 * @method \app\Application recover_exceptions()
 * @method \app\Application throw_exceptions()
 * @method \app\Application addmetarenderer($key, $metarenderer)
 * @method \app\Application injectmetarenderers(array $metarenderers = null)
 * @method \app\Application channel_is($channel = null)
 * @method \app\Channel channel()
 * @method \app\Application channel_is($channel = null)
 */
class Application extends \mjolnir\profile\Application
{
	/** @return \app\Application */
	static function instance() { return parent::instance(); }
	/** @return \app\Application */
	static function stack($args) { return parent::stack($args); }
}

/**
 * @method \app\SQLStatement prepare($key, $statement = null, $lang = null)
 * @method \app\SQLDatabase begin()
 * @method \app\SQLDatabase commit()
 * @method \app\SQLDatabase rollback()
 * @method \app\SQLStatement run_stored_statement($key)
 */
class SQLDatabase extends \mjolnir\profile\SQLDatabase
{
	/** @return \app\SQLDatabase */
	static function instance($database = 'default') { return parent::instance($database); }
}

/**
 * @method \app\SQLStatement str($parameter, $value)
 * @method \app\SQLStatement num($parameter, $value)
 * @method \app\SQLStatement bool($parameter, $value, array $map = null)
 * @method \app\SQLStatement date($parameter, $value)
 * @method \app\SQLStatement bindstr($parameter,  & $variable)
 * @method \app\SQLStatement bindnum($parameter,  & $variable)
 * @method \app\SQLStatement bindbool($parameter,  & $variable)
 * @method \app\SQLStatement binddate($parameter,  & $variable)
 * @method \app\SQLStatement arg($parameter,  & $variable)
 * @method \app\SQLStatement strs(array $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement nums(array $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement bools(array $params, array $filter = null, array $map = null, $varkey = ':')
 * @method \app\SQLStatement dates(array $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement bindstrs(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement bindnums(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement bindbools(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement binddates(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement args(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement page($page, $limit = null, $offset = 0)
 */
class SQLStatement extends \mjolnir\profile\SQLStatement
{
	/** @return \app\SQLStatement */
	static function instance($statement = null, $query = null) { return parent::instance($statement, $query); }
}

/**
 * @method \app\Stash_APC set($key, $data, $expires = null)
 * @method \app\Stash_APC flush()
 */
class Stash_APC extends \mjolnir\profile\Stash_APC
{
	/** @return \app\Stash_APC */
	static function instance($contextual = true) { return parent::instance($contextual); }
}

/**
 * @method \app\Stash_File set($key, $data, $expires = null)
 * @method \app\Stash_File flush()
 */
class Stash_File extends \mjolnir\profile\Stash_File
{
	/** @return \app\Stash_File */
	static function instance($contextual = true) { return parent::instance($contextual); }
}

/**
 * @method \app\Stash_Memcache set($key, $data, $expires = null)
 * @method \app\Stash_Memcache flush()
 */
class Stash_Memcache extends \mjolnir\profile\Stash_Memcache
{
	/** @return \app\Stash_Memcache */
	static function instance($contextual = true) { return parent::instance($contextual); }
}

/**
 * @method \app\Stash_Memcached set($key, $data, $expires = null)
 * @method \app\Stash_Memcached flush()
 */
class Stash_Memcached extends \mjolnir\profile\Stash_Memcached
{
	/** @return \app\Stash_Memcached */
	static function instance($contextual = true) { return parent::instance($contextual); }
}

class Stash extends \mjolnir\profile\Stash
{
	/** @return \app\Cache */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Log_Access set($name, $value)
 * @method \app\Task_Log_Access add($name, $value)
 * @method \app\Task_Log_Access metadata_is(array $metadata = null)
 * @method \app\Task_Log_Access writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Log_Access extends \mjolnir\profile\Task_Log_Access
{
	/** @return \app\Task_Log_Access */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Log_Cache_Get set($name, $value)
 * @method \app\Task_Log_Cache_Get add($name, $value)
 * @method \app\Task_Log_Cache_Get metadata_is(array $metadata = null)
 * @method \app\Task_Log_Cache_Get writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Log_Cache_Get extends \mjolnir\profile\Task_Log_Cache_Get
{
	/** @return \app\Task_Log_Cache_Get */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Log_Cache set($name, $value)
 * @method \app\Task_Log_Cache add($name, $value)
 * @method \app\Task_Log_Cache metadata_is(array $metadata = null)
 * @method \app\Task_Log_Cache writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Log_Cache extends \mjolnir\profile\Task_Log_Cache
{
	/** @return \app\Task_Log_Cache */
	static function instance() { return parent::instance(); }
}

/**
 * @method \app\Task_Log_Queries set($name, $value)
 * @method \app\Task_Log_Queries add($name, $value)
 * @method \app\Task_Log_Queries metadata_is(array $metadata = null)
 * @method \app\Task_Log_Queries writer_is($writer)
 * @method \app\Writer writer()
 */
class Task_Log_Queries extends \mjolnir\profile\Task_Log_Queries
{
	/** @return \app\Task_Log_Queries */
	static function instance() { return parent::instance(); }
}
trait Trait_Stash_Profile { use \mjolnir\profile\Trait_Stash_Profile; }
