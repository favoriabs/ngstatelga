<?php

  Route::group(['namespace' => 'Favoriabs\NgStateLga\Controllers', 'prefix' => 'ngstatelga'], function(){
    Route::get('/', 'NgStateLgaController@index');
    Route::post('/ajax', 'NgStateLgaController@ajaxCall')->name('state_lga');

  });

 ?>
