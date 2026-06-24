<?php

use PHPUnit\Framework\TestCase;

class genDiffTest extends TestCase
{
  private string $file1;
  private string $file2;

  protected function setUp(): void
  {
    $this->file1 = __DIR__ . '/fixtures/file1.json';
    $this->file2 = __DIR__ . '/fixtures/file2.json';
  }

  public function testgenDiff(): void
  {
        $expected = '
{
 - follow: 
   host: hexlet.io
 - proxy: 123.234.53.22
 - timeout: 50
 + timeout: 20
 + verbose: 1
}';

        $actual = genDiff($this->file1, $this->file2);

        $this->assertEquals($expected, $actual);
  }

  public function testThrowsExceptionWhenFileDoesNotExist(): void
  {
    $this->expectException(\Exception::class); 
    gendiff($this->file1, __DIR__ . '/fixtures/empty.json');
  }
  public function testThrowsExceptionWhenFileIsNotJsonorYaml(): void
  {
    $this->expectException(\Exception::class); 
    gendiff($this->file1, __DIR__ . '/fixtures/strangeFormat.xml');
  }

  public function testFileReaderReturnRightArray(): void
  {
    $actual = fileReader($this->file1);
    $expected = [
      'host' => 'hexlet.io',
      'timeout' => 50,
      'proxy' => '123.234.53.22',
      'follow' => null,
    ];
    print_r($expected);
    $this->assertEquals($expected, $actual);
  }
  
  public function testThrowsExceptionWhenFileIsADir(): void
  {
    $this->expectException(\Exception::class);
    gendiff($this->file1, __DIR__ . '/fixtures');
  }
}
