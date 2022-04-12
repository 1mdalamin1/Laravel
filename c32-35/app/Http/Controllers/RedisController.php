<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RedisController extends Controller
{
    public function getRedis()
    {
        return cache()->get('name');
        return Cache::get('custom');
        return "Get Redis";
    }

    public function setRedis()
    {
        cache(['name'=>'Tanvir'], 10);
        Cache::put('custom', "Redis Data Change", 10); // use fasade
        return "Set Redis";
    }

    public function deleteRedis()
    {
        Cache::forget('custom');
        // Cache::flush();
        return "Delete Redis";
    }
}
