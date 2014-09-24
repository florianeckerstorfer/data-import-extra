<?php
/**
 * Created by PhpStorm.
 * User: florian
 * Date: 24/09/2014
 * Time: 19:35
 */

namespace FlorianEc\DataImportExtra\ValueConverter;

use Ddeboer\DataImport\ValueConverter\ValueConverterInterface;

class MultiplicationValueConverter implements ValueConverterInterface
{
    /** @var float|int */
    private $multiplicator;

    /**
     * @param float|int $multiplicator
     */
    public function __construct($multiplicator)
    {
        $this->multiplicator = $multiplicator;
    }

    /**
     * Multiplies the given input value with the multiplicator.
     *
     * @param int|float $input Numeric input value.
     *
     * @return int|float Numeric output value.
     */
    public function convert($input)
    {
        return $input*$this->multiplicator;
    }
}
