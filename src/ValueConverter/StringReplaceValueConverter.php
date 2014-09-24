<?php

namespace FlorianEc\DataImportExtra\ValueConverter;

use Ddeboer\DataImport\ValueConverter\ValueConverterInterface;

class StringReplaceValueConverter implements ValueConverterInterface
{
    /** @var string */
    private $search;

    /** @var string */
    private $replace;

    /**
     * @param string $search
     * @param string $replace
     */
    public function __construct($search, $replace)
    {
        $this->search  = $search;
        $this->replace = $replace;
    }

    /**
     * Convert a value
     *
     * @param mixed $input Input value
     *
     * @return mixed
     */
    public function convert($input)
    {
        return str_replace($this->search, $this->replace, $input);
    }
}
