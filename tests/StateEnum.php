<?php

namespace Tests;

use Hayes\Enum\Enum;

/**
 * Class StateEnum
 *
 * @method static StateEnum FAILURE()
 * @method static StateEnum SUCCEED()
 */
class StateEnum extends Enum
{
    const FAILURE = 0;
    const SUCCEED = "OK";

    protected static function labels(): array
    {
        return [
            self::FAILURE => 'failure_label_name',
        ];
    }
}