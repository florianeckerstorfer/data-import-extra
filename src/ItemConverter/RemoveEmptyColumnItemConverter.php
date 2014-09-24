<?php

namespace FlorianEc\DataImportExtra\ItemConverter;

use Ddeboer\DataImport\ItemConverter\ItemConverterInterface;

class RemoveEmptyColumnItemConverter implements ItemConverterInterface
{
    /**
     * Removes columns with an empty column name from the item.
     *
     * @param array $input Input array.
     *
     * @return array|null Array without empty columns.
     */
    public function convert($input)
    {
        if (!$input) {
            return $input;
        }

        $output = [];
        foreach ($input as $key => $value) {
            if (trim($key)) {
                $output[$key] = $value;
            }
        }

        return $output;
    }
}
