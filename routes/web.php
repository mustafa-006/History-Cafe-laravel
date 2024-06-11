<?php

use App\Http\Controllers\PlayController;
use App\Models\Play;
use Illuminate\Support\Facades\Route;

Route::get("/" , function(){
    return view("index");
});
