<?php declare(strict_types=1);

namespace MarufMax\String\Service;

final class Csv
{
    public function create(array $contents, string $path, string $separator = ',') : void
    {
        // lets open file handler for output buffer
        $fh = fopen($path, 'w');
        // write csv headers as first row
        fwrite($fh, implode($separator, $contents));
        fclose($fh);
    }
}
