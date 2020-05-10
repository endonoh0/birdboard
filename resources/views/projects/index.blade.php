@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between items-end w-full">
            <h3 class="text-sm text-gray-500 font-normal">My Projects</h3>

            <a href="/projects/create" class="button">New Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                @include ('projects.card')
            </div>
        @empty
            <div class="text-default">No projects yet...</div>
        @endforelse
    </main>

    <modal name="hello-world" classes="p-10 bg-card rounded-lg" height="auto">
        <h1 class="font-normal mb-16 text-center text-2xl">Let's Start Something New</h1>

        <div class="flex">
            <div class="flex-1 mr-4">
                <div class="mb-4">
                    <label for="title" class="text-sm block mb-2">Title</label>
                    <input type="text" id="title" class="border border-gray-500 p-2 text-xs block w-full rounded">
                </div>

                <div class="mb-4">
                    <label for="Description" class="text-sm block mb-2">Description</label>
                    <textarea id="Description" rows="7" class="border border-gray-500 p-2 text-xs block w-full rounded"></textarea>
                </div>
            </div>

            <div class="flex-1 ml-4">
                <div class="mb-4">
                    <label class="text-sm block mb-2">Needs Some Tasks?</label>
                    <input type="text" placeholer="Task 1" class="border border-gray-500 p-2 text-xs block w-full rounded">
                </div>

                <button class="inline-flex items-center text-xs">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" class="mr-2">
                        <g fill="none" fill-rule="evenodd" opacity=".307">
                            <path stroke="#000" stroke-opacity=".012" stroke-width="0" d="M-3-3h24v24H-3z"></path>
                            <path fill="#000" d="M9 0a9 9 0 0 0-9 9c0 4.97 4.02 9 9 9A9 9 0 0 0 9 0zm0 16c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7zm1-11H8v3H5v2h3v3h2v-3h3V8h-3V5z"></path>
                        </g>
                    </svg>

                    <span>Add New Task Field</span>
                </button>
            </div>
        </div>

        <footer class="flex justify-end">
            <button class="button is-outline mr-4">Cancel</button>
            <button class="button">Create Project</button>
        </footer>
    </modal>

    <a href="" @click.prevent="$modal.show('hello-world')">Show Modal</a>
@endsection
