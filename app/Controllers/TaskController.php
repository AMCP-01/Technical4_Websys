<?php

namespace App\Controllers;

use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function tasks()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('TasksView', $data);
    }
}