<?php

use Illuminate\Http\Request;

Route::get("tasks", function(){

    $tasks = [
        [
            "id"=>1,
            "name"=>"Estudar PHP",
            "complete"=>false
        ],
        [
            "id"=>2,
            "name"=>"Estudar JavaScript",
            "complete"=>true
        ]
        ];

        return $tasks;
});

