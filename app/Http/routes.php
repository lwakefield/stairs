<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Reading;

Route::get('/', function () {
    $latest_readings = Reading::
        orderBy('created_at', 'desc')->
        take(1000)->
        select('value')->
        get();
    $sum = 0;
    foreach ($latest_readings as $reading) {
        $val = str_replace("\r\n", '', $reading->value);
        $sum += $val;
    }
    return view('splash')->with(compact('sum'));
});
