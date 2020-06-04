<?php

use Illuminate\Http\Request;

Route::get("tasks", "TasksController@index");
Route::post("tasks", "TasksController@store");
