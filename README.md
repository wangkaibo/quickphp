## Quick Start

### 安装

 `composer create-project wangkaibo/quickphp your-project-name`

安装依赖

`composer install`


### 启动配置
数据库配置文件 `config/database.php`

```
return [
    'default' => [
        'driver'    => 'mysql',
        'host'      => HOST,
        'database'  => DATABASE,
        'username'  => USER,
        'password'  => '',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ],
    // 如需连接多个数据库
	'conection2' => [
		'driver'    => 'mysql',
		'host'      => HOST,
		'database'  => DATABASE,
		'username'  => USER,
		'password'  => '',
		'charset'   => 'utf8',
		'collation' => 'utf8_unicode_ci',
		'prefix'    => '',
    ],
];
```
数据库驱动使用 illuminate/database，详细使用方法参见 Laravel 文档：[eloquent](https://laravel.com/docs/5.3/eloquent)

### 路由配置

路由文件 `app/routes.php`

```
// GET 请求
Router::get('/get', function () {
	echo 'get';
});

// POST 请求
Router::post('/post', function () {
	$post_data = file_get_contents('php://input);
	var_dump($post_data);
});

Router::get(":all", function () {
	view('welcome', compact('name'));
});
```
使用 PHP 内置 Server：

```
php -S 127.0.0.1：8080 public/index.php
```
访问：[http://127.0.0.1:8080](http://127.0.0.1:8080)
