<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

function table_name($table) {
    $tableNames = [
        'drone_users' => 'Drone Kullanıcıları',
    ];
    return $tableNames[$table];
}

function route_name($table) {
    $routeNames = [
        'drone_users' => 'drone-users',
    ];
    return $routeNames[$table];
}

function save_image(UploadedFile $file,$filename) {
    if(!File::exists(storage_path('app/public/images/'))){
        File::makeDirectory(storage_path('app/public/images/'));
    }
    $a = $file->storePubliclyAs('public/images',$filename.'.jpg');
}
