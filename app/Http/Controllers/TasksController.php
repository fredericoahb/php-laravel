<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index (){
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
            ],
            [
                "id"=>3,
                "name"=>"Estudar Laravel",
                "complete"=>false
            ]
            ];
    
            return $tasks;
    }

    public function store(){

        return "Ok";
    }
}
