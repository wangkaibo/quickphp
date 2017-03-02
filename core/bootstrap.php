<?php
/**
 * User: WangKaiBo
 * Date: 17/3/2
 * Time: 下午10:06
 */
require_once __DIR__ . '/helpers.php';

require_once app_path() . 'routes.php';

use Core\Container;

$app = Container::getInstance();
// 加载配置文件
$config_files = glob(config_path() . '*.php');

$config = [];

foreach ($config_files as $path) {
    $base_name = pathinfo($path)['filename'];
    $config[$base_name] = require $path;
}
$app->instances('config', new Core\Config($config));
use Illuminate\Database\Capsule\Manager as Capsule;

// Illuminate Database see https://github.com/illuminate/database

$capsule = new Capsule;
$capsule->addConnection(config('database'));

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();