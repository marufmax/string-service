<?php

namespace MarufMax\String\Tests\Unit;

use MarufMax\String\String\Stringify;
use PHPUnit\Framework\TestCase;

class StringifyTest extends TestCase
{
    public function testItCanUpperCaseString(): void
    {
        $input = 'hello world';
        $stringify = new Stringify($input);
        $this->assertEquals('HELLO WORLD', $stringify->toUpperCase());
    }

    public function testItCanAlterCharacterOfAString(): void
    {
        $input = 'hello world';
        $stringify = new Stringify($input);
        $this->assertEquals('hElLo wOrLd', $stringify->toAlternateCase());
    }

    public function testItCanAddCommaToCharecter(): void
    {
        $input = 'hello world';
        $stringify = new Stringify($input);
        $this->assertEquals('h,e,l,l,o, ,w,o,r,l,d', $stringify->insertDelimiterAllChar());
    }

    public function testItCanConvertStringToArray(): void
    {
        $input = 'hello';
        $stringify = new Stringify($input);
        $this->assertEquals(['h', 'e', 'l', 'l', 'o'], $stringify->toArray());
    }

    public function testItCanConvertArrayToString(): void
    {
        $input = 'hello';
        $stringify = new Stringify($input);
        $this->assertEquals('hello', $stringify->toString());
    }

    public function testItCanAddPipeToCharacter(): void
    {
        $input = 'hello world';
        $stringify = new Stringify($input);
        $this->assertEquals('h|e|l|l|o| |w|o|r|l|d', $stringify->insertDelimiterAllChar('|'));
    }
}
