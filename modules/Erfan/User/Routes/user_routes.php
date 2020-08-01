<?php

Route::group(['namespace'=>'\Erfan\User\Http\Controllers' , 'middleware'=>'web'],function(){
    Auth::routes(['verify' => true]);
});

