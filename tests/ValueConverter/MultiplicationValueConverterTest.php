<?php

namespace FlorianEc\DataImportExtra\ValueConverter;

class MultiplicationValueConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers FlorianEc\DataImportExtra\ValueConverter\MultiplicationValueConverter::convert()
     */
    public function convertShouldMultiplyTheInputValue()
    {
        $converter = new MultiplicationValueConverter(10);

        $this->assertEquals(30, $converter->convert(3));
    }
}
