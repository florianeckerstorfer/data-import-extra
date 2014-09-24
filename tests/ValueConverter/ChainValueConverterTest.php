<?php

namespace FlorianEc\DataImportExtra\ValueConverter;

use \Mockery as m;

class ChainValueConverterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers FlorianEc\DataImportExtra\ValueConverter\ChainValueConverter::__construct()
     * @covers FlorianEc\DataImportExtra\ValueConverter\ChainValueConverter::convert()
     */
    public function convertShouldCallAllValueConverters()
    {
        $converter1 = m::mock('Ddeboer\DataImport\ValueConverter\ValueConverterInterface');
        $converter1->shouldReceive('convert')->with('foobar')->andReturn('foobar2');
        $converter2 = m::mock('Ddeboer\DataImport\ValueConverter\ValueConverterInterface');
        $converter2->shouldReceive('convert')->with('foobar2')->andReturn('foobar3');

        $chain = new ChainValueConverter([$converter1, $converter2]);
        $this->assertEquals('foobar3', $chain->convert('foobar'));
    }

    /**
     * @test
     * @covers FlorianEc\DataImportExtra\ValueConverter\ChainValueConverter::addValueConverter()
     */
    public function addValueConverterAddsValueConverter()
    {
        /** @var \Ddeboer\DataImport\ValueConverter\ValueConverterInterface|\Mockery\MockInterface $converter */
        $converter = m::mock('Ddeboer\DataImport\ValueConverter\ValueConverterInterface');
        $converter->shouldReceive('convert')->with('foobar')->andReturn('foobar2');

        $chain = new ChainValueConverter();
        $chain->addValueConverter($converter);
        $this->assertEquals('foobar2', $chain->convert('foobar'));
    }
}
