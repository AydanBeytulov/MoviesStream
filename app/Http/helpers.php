<?php
/**
 * Custom blade directive Helper functions
 */
if (! function_exists('showImage')) {
    function showImage(string $url) {
        return '/storage/'.$url;
    }
}