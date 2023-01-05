<?php
    use Openlab\User\Models\User;
    Route::get('api/test/{id}', function ($id) {
        return $id;
    });
    Route::get('api/all', function(){
        $json = User::all();
        return $json;
    });