<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest as Request;
use App\Models\Task;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return inertia('Dashboard', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return Task::create($request
            ->only([
                'title',
                'description',
                'status',
                'priority',
                'due_date',
                'tags',
                'category',
            ]));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return $task;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return $this->show($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $update = $task->update($request
            ->only([
                'title',
                'description',
                'status',
                'priority',
                'due_date',
                'tags',
                'category',
            ]));

        return $update ? response()->json($task) : response()->json(['message' => 'Task not updated'], 401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $id)
    {
        return $id->delete();
    }
}
