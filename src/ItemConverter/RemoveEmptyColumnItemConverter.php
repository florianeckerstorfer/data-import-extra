<?php

namespace FlorianEc\DataImportExtra\ItemConverter;

use Ddeboer\DataImport\ItemConverter\ItemConverterInterface;

class RemoveEmptyColumnItemConverter implements ItemConverterInterface
{
    /**
     * Convert an input
     *
     * @param mixed $input Input
     *
     * @return array|null the modified input or null to remove it
     */
    public function convert($input)
    {
        $output = [];
        foreach ($input as $key => $value) {
            if (trim($key)) {
                $output[$key] = $value;
            }
        }

        return $output;
    }
}
