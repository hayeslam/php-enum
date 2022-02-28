<?php

namespace Hayes\Enum;

abstract class Enum extends \MyCLabs\Enum\Enum
{
    /**
     * Returns the labels of all constants in the Enum class
     *
     * @return array
     */
    protected static function labels()
    {
        return array();
    }

    /**
     * Returns the enum label
     *
     * @return mixed|string
     */
    public function getLabel()
    {
        $labels = static::labels();

        return isset($labels[$this->value]) ? $labels[$this->value] : $this->getKey();
    }

    /**
     * Returns all possible options as an array
     *
     * @return array
     */
    public static function options()
    {
        $array = array();
        $labels = static::labels();
        foreach (parent::toArray() as $key => $value) {
            $array[$key] = isset($labels[$value]) ? $labels[$value] : $value;
        }

        return $array;
    }
}
