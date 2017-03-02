<?php
/**
 * Created by PhpStorm.
 * User: wangkaibo
 * Date: 2017/3/2 0002
 * Time: 18:03
 */
use \NoahBuscher\Macaw\Macaw as Router;

Router::get('/quick', function () {
	echo 'hi';
});

Router::get('test', 'App\Controllers\TestController@index');

Router::get(":all", function () {

});

Router::dispatch();
