@extends('layouts.app')

@section('content')
    <form method="POST" action="/projects">
        @csrf

        <h1 class="heading is-l">Create a Project</h1>

        <div class="field" style="padding-top: 10px">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input class="input" type="text" name="title" placeholder="title" id="title">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea class="textarea" name="description" id="description"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
                <a href="/projects">Cancel</a>
            </div>
        </div>
    </form>
@endsection
