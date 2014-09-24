<?php

namespace FlorianEc\DataImportExtra\ItemConverter;


class RemoveEmptyColumnItemConverterTest extends \PHPUnit_Framework_TestCase
{
    /** @var RemoveEmptyColumnItemConverter */
    private $converter;

    public function setUp()
    {
        $this->converter = new RemoveEmptyColumnItemConverter();
    }

    /**
     * @test
     * @covers FlorianEc\DataImportExtra\ItemConverter\RemoveEmptyColumnItemConverter::convert()
     */
    public function convertRemovesColumnWithEmptyKey()
    {
        $input = ['key' => 'value', '' => '', "\n" => '', ' ' => ''];
        $output = $this->converter->convert($input);

        $this->assertCount(1, $output);
        $this->assertEquals('value', $output['key']);
    }
}
