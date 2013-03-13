<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\profile'


/**
 * @method \app\Application channel_is($channel)
 * @method \app\Application recover_exceptions()
 * @method \app\Application throw_exceptions()
 * @method \app\Application addmetarenderer($key, $metarenderer)
 * @method \app\Application injectmetarenderers(array $metarenderers = null)
 * @method \app\Application Channeled__channel_is($channel)
 * @method \app\Channel channel()
 */
class Application extends \mjolnir\profile\Application
{
	/** @return \app\Application */
	static function instance() { return parent::instance(); }
	/** @return \app\Application */
	static function stack($args) { return parent::stack($args); }
}

class SQLDatabase extends \mjolnir\profile\SQLDatabase
{
	/** @return \app\SQLDatabase */
	static function instance() { return parent::instance(); }
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
 * @method \app\SQLStatement dates(array $params, array $filter = null, array $map = null, $varkey = ':')
 * @method \app\SQLStatement bindstrs(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement bindnums(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement bindbools(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement binddates(array  & $params, array $filter = null, array $map = null, $varkey = ':')
 * @method \app\SQLStatement args(array  & $params, array $filter = null, $varkey = ':')
 * @method \app\SQLStatement page($page, $limit = null, $offset = 0)
 */
class SQLStatement extends \mjolnir\profile\SQLStatement
{
	/** @return \app\SQLStatement */
	static function instance($statement = null, $query = null) { return parent::instance($statement, $query); }
}
