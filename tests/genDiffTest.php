<?php

use PHPUnit\Framework\TestCase;

class genDiffTest extends TestCase
{
  public function testgenDiff(): void
  {
        $path1 = __DIR__ . '/fixtures/file1.json';
        $path2 = __DIR__ . '/fixtures/file2.json';

        $expected = '
{
 - follow: 
   host: hexlet.io
 - proxy: 123.234.53.22
 - timeout: 50
 + timeout: 20
 + verbose: 1
}';

        $actual = genDiff($path1, $path2);

        $this->assertEquals($expected, $actual);
  }
}