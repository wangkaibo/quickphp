<?php
/**
 * User: WangKaiBo
 * Date: 17/3/2
 * Time: 下午10:02
 */
if (!function_exists('config_path')) {
    /**
     * configure files path
     * @return string
     */
    function config_path() {
        return __DIR__ . '/../config' . DIRECTORY_SEPARATOR;
    }
}

if (!function_exists('public_path')) {
    /**
     * public path
     * @return string
     */
    function public_path() {
        return __DIR__ . '/../public' . DIRECTORY_SEPARATOR;
    }
}

if (!function_exists('app_path')) {
    /**
     * app path
     * @return string
     */
    function app_path() {
        return __DIR__ . '/../app' . DIRECTORY_SEPARATOR;
    }
}

if (!function_exists('config')) {
    /**
     * 获取设置配置项值
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function config($key = null, $default = null)
    {
        $config = \Core\Config::getInstance();
        return $config->get($key, $default);
    }
}

if (!function_exists('app')) {

    function app($make = null)
    {
        if (is_null($make)) {
            return \Core\App::getInstance();
        }

        return \Core\App::getInstance()->make($make);
    }
}

if (!function_exists('storage_path')) {
    function storage_path() {
        return __DIR__ . '/../storage' . DIRECTORY_SEPARATOR;
    }
}

if (!function_exists('view')) {
    /**
     * 返回一个给定的视图
     * @param $name
     * @param array $data
     * @return string
     */
    function view($name, $data = []) {

        $path = config('view')['view_path']; // 视图文件目录，这是数组，可以有多个目录
        $cachePath = storage_path() . 'cache/views';     // 编译文件缓存目录

        $compiler = new \Xiaoler\Blade\Compilers\BladeCompiler($cachePath);

        // 如过有需要，你可以添加自定义关键字
//        $compiler->directive('datetime', function($timestamp) {
//
//        });

        $engine = new \Xiaoler\Blade\Engines\CompilerEngine($compiler);
        $finder = new \Xiaoler\Blade\FileViewFinder($path);

        // 如果需要添加自定义的文件扩展，使用以下方法
//        $finder->addExtension('tpl');

        // 实例化 Factory
        $factory = new \Xiaoler\Blade\Factory($engine, $finder);

        // 渲染视图并输出
        return $factory->make($name, $data)->render();
    }
}