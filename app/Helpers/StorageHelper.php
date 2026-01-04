<?
// app/Helpers/StorageHelper.php

if (! function_exists('storage_url')) {
    function storage_url($path)
    {
        return url('/storage/' . $path);
    }
}
