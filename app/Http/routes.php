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
use Carbon\Carbon;

define('SIGNAL_THRESHOLD', 500);

Route::get('/', function () {
    return view('splash');
});

Route::get('/api/score', function() {
    $time_until = Carbon::now('Australia/Sydney')->subMinutes(5);
    $score = Reading::
        where('created_at', '>', $time_until)->
        where('value', '<', SIGNAL_THRESHOLD)->
        count();
    $total_readings = Reading::
        where('created_at', '>', $time_until)->
        count();
    return $score / $total_readings;
});
