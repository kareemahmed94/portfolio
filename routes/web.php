<?php




Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get('/about',function(){
	return view('about');
});

Route::get('/contact', 'ContactController@create');
Route::post('/contact',  'ContactController@store'); 