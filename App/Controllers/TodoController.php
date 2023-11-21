<?php

namespace App\Controllers;


class TodoController{

    public function list(){
        $data = [

            'tasks' => ['task1', 'task2', 'task3', 'task4', 'task5'],
            'titles' => ['Todo List']
        ];

        view('todo.list', $data);
    }
}