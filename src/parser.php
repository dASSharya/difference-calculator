#!/usr/bin/env php
<?php

function parse($file)
{
    $data = json_decode($file);
    $parsedData = [];

    foreach ($data as $key => $value) {
        $parsedData[$key] = $value;
    }

    return $parsedData;
}
