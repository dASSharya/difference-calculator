<?php

namespace App;

function fileReader($path)
{
    if (!file_exists($path)) {
        throw new \Exception("file not found");
    }
    if (is_dir($path)) {
        throw new \Exception("It's a directory: $path");
    }
    return file_get_contents($path);
}
