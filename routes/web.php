<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

Route::get('/', function () {
    $presetPath = base_path('content/presets/distillery/seven_caves.yaml');
    $data = file_exists($presetPath) ? Yaml::parseFile($presetPath) : [];

    return view('page', array_merge([
        'title' => 'Seven Caves Distillery — Ludicrously Small Batch Craft Spirits',
        'meta_description' => 'Seven Caves Spirits crafts the finest cane-to-glass rums, coastal botanical gins, and grain-to-glass whiskeys in 120-bottle micro-batches in San Diego, CA.',
    ], $data));
})->name('home');
