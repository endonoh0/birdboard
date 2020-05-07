<div class="card" style="height: 200px">
    <h3 class="font-normal text-lg py-4 -ml-5 mb-3 border-l-4 border-blue-300 pl-4">
        <a href="{{ $project->path() }}" class="no-underline">{{ $project->title }}</a>
    </h3>

    <div class="text-gray-500 mb-4">{{ \Illuminate\Support\Str::limit($project->description, 100) }}</div>

    <footer>
        <form method="POST" action="{{ $project->path() }}" class="text-right">
            @method('DELETE')
            @csrf

            <button type="submit"class="text-xs">Delete</button>
        </form>
    </footer>
</div>
