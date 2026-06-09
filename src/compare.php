<?php
namespace App;

//use function App\fileReader;

function genDiff(string $firstFile, string $secondFile)
{
$file1 = fileReader($firstFile);
$file2 = fileReader($secondFile);

$data1 = json_decode($file1, true);
$data2 = json_decode($file2, true);

$resultArr = [];

$keys = array_unique(array_merge(
  array_keys($data1),
  array_keys($data2)
));

sort($keys);

foreach ($keys as $key) {
  $has1 = array_key_exists($key, $data1);
  $has2 = array_key_exists($key, $data2);

  if($has1 && $has2) {
    if($data1[$key] === $data2[$key]) {
      $resultArr["  $key"] = $data1[$key];
    } else {
      $resultArr["- $key"] = $data1[$key];
      $resultArr["+ $key"] = $data2[$key];
    }
  } elseif (!$has1) {
    $resultArr["+ $key"] = $data2[$key];
  } elseif (!$has2) {
    $resultArr["- $key"] = $data1[$key];
  }
}

$resultStr = "\n{\n";

foreach ($resultArr as $key => $value) {
  $resultStr = "$resultStr $key: $value\n";
}
$resultStr .= "}";
return $resultStr;
}