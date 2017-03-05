<?php
/**
 * User: WangKaiBo
 * Date: 17/3/2
 * Time: 下午10:06
 */
require_once __DIR__ . '/helpers.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$database_config = config('database');

foreach ($database_config as $key => $config) {
    $capsule->addConnection($config, $key);
}

$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

// 加载路由
require_once app_path() . 'routes.php';
