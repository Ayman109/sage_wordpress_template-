<?php

$files = [
    'admin'
];

foreach ($files as $file) {
    require_once __DIR__ . "/{$file}.php";
}

