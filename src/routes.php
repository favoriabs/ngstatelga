<?php

  Route::group(['namespace' => 'Favoriabs\Ngstatelga\Controllers', 'prefix' => 'ngstatelga'], function(){
    Route::get('/', 'NgStateLgaController@index');
    Route::post('/ajax', 'NgStateLgaController@ajaxCall')->name('state_lga');

  });

 ?>
