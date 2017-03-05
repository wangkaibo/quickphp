<?php
/**
 * Created by PhpStorm.
 * User: wangkaibo
 * Date: 2017/3/2 0002
 * Time: 18:03
 */
use \NoahBuscher\Macaw\Macaw as Router;

Router::get('/quick', function () {
	echo 'quick';
});

Router::get('test', 'App\Controllers\TestController@index');

Router::get(":all", function () {
	header('HTTP/1.0 404 Not Found');
});

Router::dispatch();
