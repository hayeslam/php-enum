<?php

namespace Hayes\Enum;

abstract class Enum extends \MyCLabs\Enum\Enum
{
    /**
     * Returns the labels of all constants in the Enum class
     *
     * @return array
     */
    protected static function labels(): array
    {
        return [];
    }

    /**
     * Returns the enum label
     *
     * @return mixed|string
     */
    public function getLabel()
    {
        $labels = static::labels();

        return $labels[$this->value] ?? $this->getKey();
    }

    /**
     * Returns all possible options as an array
     *
     * @return array
     */
    public static function options(): array
    {
        $array = [];
        foreach (self::values() as $key => $value) {
            $array[$key] = $value->getLabel();
        }

        return $array;
    }
}
