<?php

Route::group(['prefix' => 'room-categories', 'as' => 'room_categories.'], static function () {
    Route::pattern('uuid', '\b[0-9a-f]{8}\b-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-\b[0-9a-f]{12}\b');

    Route::get('', 'RoomCategoryController@index')->name('index');
    Route::get('create', 'RoomCategoryController@create')->name('create');
    Route::post('', 'RoomCategoryController@store')->name('store');
    Route::get('{id}/edit', 'RoomCategoryController@edit')->name('edit');
    Route::put('{uuid}/update', 'RoomCategoryController@update')->name('update');
    Route::delete('{uuid}', 'RoomCategoryController@destroy')->name('destroy');
});
