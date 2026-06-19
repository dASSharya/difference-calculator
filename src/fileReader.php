<?php

use Symfony\Component\Yaml\Yaml;

function getFileExtension($path)
{
    return pathinfo($path, PATHINFO_EXTENSION);
}

function fileReader($path)
{
    if (!file_exists($path)) {
        throw new \Exception("file not found");
    }
    if (is_dir($path)) {
        throw new \Exception("It's a directory: $path");
    }


    $file = file_get_contents($path);
    $format = getFileExtension($path);
    if ($format == 'yaml' || $format == 'yml') {
        return Yaml::parse($file, Yaml::PARSE_OBJECT_FOR_MAP);
    } elseif ($format == 'json') {
        return json_decode($file, true);
    } else {
      throw new \Exception("It's unsupported format: $format");
    }



}
