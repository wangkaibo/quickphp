<?php
/**
 * Created by PhpStorm.
 * User: wangkaibo
 * Date: 2017/3/2 0002
 * Time: 18:31
 */
namespace App\Controllers;

use App\Models\Test;

class TestController extends BaseController
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$res = Test::first();
		echo json_encode($res);
	}
}
