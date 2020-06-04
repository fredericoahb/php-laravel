<?php

namespace App\Http\Controllers;

use app\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index (){
           
            return Task::all();
    }

    public function store(){

        return "Ok";
    }
}
