<?php

$files = [
    'panels',
    'general',
    'colors',
    'typography',
    'fontSize',
    'contact',
    'socialMedia',
];

foreach ($files as $file) {
    require_once __DIR__ . "/{$file}.php";
}

