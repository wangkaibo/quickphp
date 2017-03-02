<?php
/**
 * User: WangKaiBo
 * Date: 17/3/2
 * Time: 下午11:00
 */
namespace Core;

class Config
{
    protected $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * 判断给出的键值的配置项是否存在
     * @param $key
     * @return bool
     */
    public function has($key)
    {
        return isset($this->items[$key]);
    }

    /**
     * 根据键值获取配置值
     * @param $key
     * @param $default
     * @return mixed
     */
    public function get($key, $default = null)
    {
        if ($this->has($key)) {
            return $this->items[$key];
        }

        return $default;
    }

    /**
     * 设置配置值
     * @param $key
     * @param null $value
     */
    public function set($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $innerKey => $innerValue) {
                $this->items[$innerKey] = $innerValue;
            }
        } else {
            $this->items[$key] = $value;
        }
    }
}