<?php

/**
 * Return the full path of a versioned asset
 *
 * @param  string $filename
 * @return string
 */
function asset_path($filename) {
    $manifest_path = public_path().'/dist/rev-manifest.json';

    if (file_exists($manifest_path)) {
        $manifest = json_decode(file_get_contents($manifest_path), TRUE);
    } else {
        $manifest = [];
    }

    if (array_key_exists($filename, $manifest)) {
        return '/dist/' . $manifest[$filename];
    }

    return $filename;
}