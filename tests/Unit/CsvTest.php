<?php

namespace MarufMax\String\Tests\Unit;

use MarufMax\String\Service\Csv;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;
use PHPUnit\Framework\TestCase;

class CsvTest extends TestCase
{
    private vfsStreamDirectory $rootDir;

    protected function setUp(): void
    {
        $this->rootDir = vfsStream::setup();
    }

    public function testItCanCreateCsvFile(): void
    {
        $csv = new Csv();
        $csv->create(['h', 'e', 'l', 'l', 'o'], vfsStream::url( 'root/output.csv'));
        $this->assertTrue($this->rootDir->hasChild('output.csv'));
    }
}
