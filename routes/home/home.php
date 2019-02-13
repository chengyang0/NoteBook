<?php

Route::group(['namespace'=>'Home\Index','prefix'=>'index'],function(){
	Route::get('index','IndexCtrl@index')->name('IndexIndex');
	Route::get('login','IndexCtrl@login')->name('IndexLogin');
	//    Route::get('logout','IndexCtrl@logout')->name('IndexLogout');
});
