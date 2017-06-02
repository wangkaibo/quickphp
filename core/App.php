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
    private function __clone()
    {

    }
    
    /**
     * 声明成私有方法，禁止重建对象
     */
    private function __wakeup()
    {
        
    }

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            self::$instance = new self();
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
