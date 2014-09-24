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
     * @param string $search  Search string
     * @param string $replace Replace string
     */
    public function __construct($search, $replace)
    {
        $this->search  = $search;
        $this->replace = $replace;
    }

    /**
     * Replaces occurrences of the search string with the replace string in the given input string.
     *
     * @param string $input Input string.
     *
     * @return string Output string.
     */
    public function convert($input)
    {
        return str_replace($this->search, $this->replace, $input);
    }
}
