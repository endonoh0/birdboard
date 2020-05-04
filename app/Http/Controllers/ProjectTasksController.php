<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    /**
     * Add a task to the given project.
     *
     * @param \App\Project $project
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Project $project)
    {
        $this->authorize('update', $project);

        request()->validate(['body' => 'required']);

        $project->addTask(request('body'));

        return redirect($project->path());
    }

    /**
     * Update the project.
     *
     * @param  Project $project
     * @param  Task    $task
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Project $project, Task $task)
    {
        $this->authorize('update', $task->project);

        request()->validate(['body' => 'required']);

        $task->update(['body' => request('body')]);

        if (request()->has('completed')) {
            $task->complete();
        }
        return redirect($project->path());
    }
}
