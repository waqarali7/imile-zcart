<?php

use Waqarali7\Imilezcart\Http\Controllers\ImilezcartController;

Route::group(['namespace' => 'Waqarali7\Imilezcart\Http\Controllers'],function (){
//    Route::get('imilezcart/test', 'ImilezcartController@test');
    Route::get('track', [
        ImilezcartController::class, 'imileTrack'
    ])->name('order.imile.track');

});
