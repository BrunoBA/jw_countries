<?php

function loadCountries(): array
{
    try {
        $file = file_get_contents(__DIR__.'/countries.json');

        return json_decode($file);
    } catch (Exception) {
        return [];
    }
}
