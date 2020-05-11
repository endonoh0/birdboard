@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-default font-normal">
                <a href="/projects" class="text-default font-normal">My Projects</a> / {{ $project->title }}
            </p>

            <div class="flex items-center">
                @foreach ($project->members as $member)
                    <img
                        src="{{ gravatar_url($member->email) }}"
                        alt="{{ $member->name }}'s avatar"
                        class="rounded-full w-8 mr-2">
                @endforeach

                <img
                    src="{{ gravatar_url($project->owner->email) }}"
                    alt="{{ $project->owner->name }}'s avatar"
                    class="rounded-full w-8 mr-2">

                <a href="{{ $project->path() . '/edit' }}" class="button ml-4">Edit Project</a>
            </div>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-default font-normal mb-3">Tasks</h2>

                    {{-- Tasks --}}
                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{ $task->path() }}">
                                @csrf
                                @method('PATCH')

                                <div class="flex items-center">
                                    <input name="body" value="{{ $task->body }}" class="bg-card text-default w-full {{ $task->completed ? 'line-through text-gray-500' : '' }}">
                                    <input name="completed" type="checkbox" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                </div>
                            </form>
                        </div>
                    @endforeach
                        <div class="card mb-3">
                            <form method="POST" action="{{ $project->path() . '/tasks' }}">
                                @csrf

                                <input class="bg-card text-default w-full" placeholder="Add a new task..." name="body">
                            </form>
                        </div>
                </div>

                <div>
                    <h2 class="text-lg text-default font-normal mb-3">General Notes</h2>

                    {{-- General Notes --}}
                    <form method="POST" action="{{ $project->path() }}">
                        @csrf
                        @method('PATCH')

                        <textarea
                            name="notes"
                            class="card text-default w-full mb-4"
                            placeholder="Anything you want to note?"
                            style="min-height: 200px"
                        >{{ $project->notes }}</textarea>

                        <button class="button" type="submit">Save</button>
                    </form>

                    @include ('errors')
                </div>
            </div>

            <div class="lg:w-1/4 px-3 lg:py-8">
                @include ('projects.card')
                @include ('projects.activity.card')

                @can ('manage', $project)
                    @include ('projects.invite')
                @endcan
            </div>
        </div>
    </main>
@endsection

