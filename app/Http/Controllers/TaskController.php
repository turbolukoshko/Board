<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create()
    {
        $catalogs = auth()->user()->catalogs;
        return view('task.create', compact('catalogs'));
    }

    public function store(Request $request)
    {
        $task = new Task;
        $task->name = $request->get('name');
        $task->description = $request->get('description');
        $task->user_id = $request->user()->id;
        $task->catalog_id = $request->get('catalogs');
        $task->save();
        return redirect()->route('catalogs.index');
    }
}
