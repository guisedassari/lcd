<?php

function debbug($variavel) {
    echo '<pre>';
    print_r($variavel);
    echo '</pre>';
    die();
}

function xdebbug($variavel) {
    echo '<pre>';
    print_r($variavel);
    echo '</pre>';
}

function formatSizeUnits($yoursize) {
    if ($yoursize < 1024) {
        return "{$yoursize} bytes";
    } elseif ($yoursize < 1048576) {
        $size_kb = round($yoursize / 1024);
        return "{$size_kb} KB";
    } else {
        $size_mb = round($yoursize / 1048576, 1);
        return "{$size_mb} MB";
    }
}
