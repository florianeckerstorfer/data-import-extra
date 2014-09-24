<?php

namespace FlorianEc\DataImportExtra\ValueConverter;

use Ddeboer\DataImport\ValueConverter\ValueConverterInterface;

class ChainValueConverter implements ValueConverterInterface
{
    /** @var ValueConverterInterface[] */
    private $valueConverters = [];

    public function __construct(array $valueConverters = [])
    {
        foreach ($valueConverters as $valueConverter) {
            $this->addValueConverter($valueConverter);
        }
    }

    /**
     * @param ValueConverterInterface $valueConverter
     *
     * @return ChainValueConverter
     */
    public function addValueConverter(ValueConverterInterface $valueConverter)
    {
        $this->valueConverters[] = $valueConverter;

        return $this;
    }

    /**
     * Applies all value converters to the given input value.
     *
     * @param mixed $input Input value.
     *
     * @return mixed Output value.
     */
    public function convert($input)
    {
        foreach ($this->valueConverters as $valueConverter) {
            $input = $valueConverter->convert($input);
        }

        return $input;
    }
}
