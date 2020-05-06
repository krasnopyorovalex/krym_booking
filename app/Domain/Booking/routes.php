<?php

Route::group(['prefix' => 'bookings', 'as' => 'bookings.'], static function () {
    Route::pattern('uuid', '\b[0-9a-f]{8}\b-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-\b[0-9a-f]{12}\b');

    Route::get('{uuid}', 'BookingController@show')->name('show');
    Route::get('create', 'BookingController@create')->name('create');
    Route::post('', 'BookingController@store')->name('store');
    Route::post('{uuid}/update', 'BookingController@update')->name('update');
    Route::delete('{uuid}', 'BookingController@destroy')->name('destroy');
});
