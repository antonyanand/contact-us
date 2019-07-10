<?php
//
//Route::get('contact', function () {
//    return view('contact::contact');
//})->name('contact');
//
//Route::post('contact/store', function (){
//    return request()->all();
//})->name('contact.store');


Route::group(['namespace' => 'Contacts\Http\Controllers'], function () {
    Route::resource('contact', 'ContactController');
});
