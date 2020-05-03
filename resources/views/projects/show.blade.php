@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <p class="text-sm text-gray-500 font-normal">
                <a href="/projects" class="text-sm text-gray-500 font-normal">My Projects</a> / {{ $project->title }}
            </p>

            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">
            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-gray-500 font-normal mb-3">Tasks</h2>

                    {{-- Tasks --}}
                    @foreach ($project->tasks as $task)
                        <div class="card mb-3">{{ $task->body }}</div>
                    @endforeach
                        <div class="card mb-3">
                            <form method="POST" action="{{ $project->path() . '/tasks' }}">
                                @csrf

                                <input class="w-full" placeholder="Add a new task..." name="body">

                            </form>
                        </div>
                </div>

                <div>
                    <h2 class="text-lg text-gray-500 font-normal mb-3">General Notes</h2>

                    {{-- General Notes --}}
                    <textarea class="card w-full" style="min-height: 200px">Lorem ipsum</textarea>
                </div>
            </div>

            <div class="lg:w-1/4 px-3">
                @include ('projects.card')
            </div>
        </div>
    </main>
@endsection

