<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
   public $tasks = [
        [
            'id' => 1,
            'name' => 'Task 1',
            'description' => 'This is task 1'
        ],
        [
            'id' => 2,
            'name' => 'Task 2',
            'description' => 'This is task 2'
        ],
        [
            'id' => 3,
            'name' => 'Task 3',
            'description' => 'This is task 3'
        ],
        [
            'id' => 4,
            'name' => 'Task 4',
            'description' => 'This is task 4'
        ],
        [
            'id' => 5,
            'name' => 'Task 5',
            'description' => 'This is task 5'
        ],
        [
            'id' => 6,
            'name' => 'Task X',
            'description' => 'This is task X'
        ]
    ]
}