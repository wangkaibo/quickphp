<?php
/**
 * Created by PhpStorm.
 * User: wangkaibo
 * Date: 2017/3/2 0002
 * Time: 16:15
 */

// 伪静态
if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
	return false;    // serve the requested resource as-is.
}

require __DIR__ . '/../vendor/autoload.php';

require_once  __DIR__ . '/../core/bootstrap.php';