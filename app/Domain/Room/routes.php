<?php

Route::group(['prefix' => 'rooms', 'as' => 'rooms.'], static function () {
    Route::pattern('uuid', '\b[0-9a-f]{8}\b-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-\b[0-9a-f]{12}\b');

    Route::get('{uuid}/create', 'RoomController@create')->name('create');
    Route::post('{uuid}', 'RoomController@store')->name('store');
    Route::get('{id}/edit', 'RoomController@edit')->name('edit');
    Route::put('{uuid}/update', 'RoomController@update')->name('update');
    Route::delete('{uuid}', 'RoomController@destroy')->name('destroy');
});
