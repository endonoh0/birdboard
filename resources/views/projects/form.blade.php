@csrf

<div class="field mb-6">
    <label class="label text-sm mb-2 block" for="title">Title</label>

    <div class="control">
        <input
            class="input bg-transparent border border-gray-500 rounded p-2 text-xs w-full"
            type="text"
            name="title"
            placeholder="title"
            required
            value="{{ $project->title }}">
    </div>
</div>

<div class="field mb-6">
    <label class="label text-sm mb-2 block" for="description">Description</label>

    <div class="control">
        <textarea
            class="textarea bg-transparent border border-gray-500 rounded p-2 text-xs w-full"
            name="description"
            rows="10"
            placeholder="I should start learning piano."
            required>{{ $project->description }}</textarea>
    </div>
</div>

<div class="field">
    <div class="control">
        <button class="button is-link mr-2" type="submit">{{ $buttonText }}</button>

        <a href="{{ $project->path() }}">Cancel</a>
    </div>
</div>

@if ($errors->any())
    <div class="field mt-6">
        @foreach ($errors->all() as $error)
            <li class="text-sm text-red-500">{{ $error }}</li>
        @endforeach
    </div>
@endif
