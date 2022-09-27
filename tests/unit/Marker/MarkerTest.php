<?php

namespace N0sz\CommonMark\Tests\Unit\Marker;

use N0sz\CommonMark\Marker\Marker;
use PHPUnit\Framework\TestCase;

final class MarkerTest extends TestCase
{
    public function testEmptyConstructor(): void
    {
        $emphasis = new Marker();
        $this->assertSame('==', $emphasis->getOpeningDelimiter());
        $this->assertSame('==', $emphasis->getClosingDelimiter());
    }

    public function testConstructor(): void
    {
        $emphasis = new Marker('===');
        $this->assertSame('===', $emphasis->getOpeningDelimiter());
        $this->assertSame('===', $emphasis->getClosingDelimiter());
    }
}