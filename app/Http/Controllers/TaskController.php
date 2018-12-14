<?php

namespace App\Http\Controllers;

use App\Catalog;
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

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return view('task.show',  compact('task'));
    }

    public function edit($id)
    {
        $catalogs = auth()->user()->catalogs;
        $task = Task::find($id);
        return view('task.edit', compact('catalogs', 'task'));
    }

    public function update($id, Request $request)
    {
        $task = Task::find($id);
        $task->name = $request->get('name');
        $task->description = $request->get('description');
        $task->user_id = $request->user()->id;
        $task->save();
        return redirect()->route('catalogs.index');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('catalogs.index');
    }
}
