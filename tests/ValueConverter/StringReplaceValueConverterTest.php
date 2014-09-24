<?php

namespace FlorianEc\DataImportExtra\ValueConverter;

class StringReplaceValueConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers FlorianEc\DataImportExtra\ValueConverter\StringReplaceValueConverter::__construct()
     * @covers FlorianEc\DataImportExtra\ValueConverter\StringReplaceValueConverter::convert()
     */
    public function convertShouldReplaceSearchWithReplace()
    {
        $converter = new StringReplaceValueConverter('foo', 'baz');

        $this->assertEquals('bazbar', $converter->convert('foobar'));
    }
}
