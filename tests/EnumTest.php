<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class EnumTest extends TestCase
{
    public function testGetLabel()
    {
        $state = new StateEnum(StateEnum::FAILURE);
        $this->assertEquals('failure_label_name', $state->getLabel());

        $state = new StateEnum(StateEnum::SUCCEED);
        $this->assertEquals('SUCCEED', $state->getLabel());
    }

    public function testOptions()
    {
        $values = StateEnum::options();
        $expectedValues = [
            'FAILURE' => StateEnum::FAILURE()->getLabel(),
            'SUCCEED' => StateEnum::SUCCEED()->getLabel(),
        ];
        $this->assertSame($expectedValues, $values);
    }
}
