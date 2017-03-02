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

if (!function_exists('app_path')) {
    /**
     * app path
     * @return string
     */
    function app_path() {
        return __DIR__ . '/../app' . DIRECTORY_SEPARATOR;
    }
}

if (! function_exists('config')) {
    /**
     * 获取或临时设置配置项值
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed
     */
    function config($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('config');
        }

        if (is_array($key)) {
            return app('config')->set($key);
        }

        return app('config')->get($key, $default);
    }
}

if (! function_exists('app')) {

    function app($make = null)
    {
        if (is_null($make)) {
            return \Core\Container::getInstance();
        }

        return \Core\Container::getInstance()->make($make);
    }
}
