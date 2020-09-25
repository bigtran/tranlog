<?php
/**
 * Licensed under The MIT License
 * For full copyright and license information, please see the MIT-LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @author    bigtran<leouzdc@qq.com>
 * @copyright bigtran<leouzdc@qq.com>
 * @link      http://www.bigtran.com/
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */


namespace support\bootstrap\db;

use Webman\Bootstrap;
use Workerman\Worker;

/**
 * Class TransFrame
 * @package support\bootstrap\db
 */
class TransFrame implements Bootstrap
{
    /**
     * @param Worker $worker
     *
     * @return void
     */
    public static function start($worker)
    {
        if (!class_exists('\Illuminate\Database\Capsule\Manager')) {
            return;
        }
        $capsule = new Capsule;
        $configs = config('database');
        $default_config = $configs['connections'][$configs['default']];
        $capsule->addConnection($default_config);

        foreach ($configs['connections'] as $name => $config) {
            $capsule->addConnection($config, $name);
        }

        if (class_exists('\Illuminate\Events\Dispatcher')) {
            $capsule->setEventDispatcher(new Dispatcher(new Container));
        }

        $capsule->setAsGlobal();

        $capsule->bootEloquent();
    }
}
