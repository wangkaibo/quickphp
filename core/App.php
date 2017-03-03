<?php
/**
 * User: WangKaiBo
 * Date: 17/3/2
 * Time: 下午11:14
 */
namespace Core;

class App
{
    /**
     * 共享类的实例
     * @var array
     */
    protected $instances = [];

    public static $instance = null;

    private function __construct()
    {

    }

    /**
     * 防止用户克隆实例
     */
    public function __clone(){

    }

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new App();
        }
        return self::$instance;
    }

    /**
     * 保存类实例到
     * @param $abstract
     * @param $instance
     */
    public function instances($abstract, $instance)
    {
        $this->instances[$abstract] = $instance;
    }

    public function make($abstract)
    {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
    }
}