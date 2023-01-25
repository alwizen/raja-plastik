<?php
if(!function_exists('mataUang_IDR')) {
    function mataUang_IDR($value) {
        return "Rp. " . number_format($value, 0, ',', '.');
    }
}