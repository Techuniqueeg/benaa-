<?php
use App\Models\Setting;

if (!function_exists('settings')) {
    function settings($key)
    {
        return Setting::where('key',$key)->first()->val;
    }
}
