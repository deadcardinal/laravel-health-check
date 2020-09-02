<?php

Route::group(['prefix' => 'health-check'], function () {
    Route::get('/readiness', 'Ambientia\HealthCheck\Http\Controllers\HealthCheckController@readiness');
    Route::get('/liveness/backend', 'Ambientia\HealthCheck\Http\Controllers\HealthCheckController@livenessBackend');
    Route::get('/liveness/database', 'Ambientia\HealthCheck\Http\Controllers\HealthCheckController@livenessDatabase');
    Route::get('/liveness/schedule', 'Ambientia\HealthCheck\Http\Controllers\HealthCheckController@livenessSchedule');
    Route::get('/liveness/queue', 'Ambientia\HealthCheck\Http\Controllers\HealthCheckController@livenessQueue');
});
