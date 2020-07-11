<style>
    .d-item {
        width: 30%;
    }

    .d-item:hover {
        text-decoration: none;
    }

    .d-item img {
        width: 200px;
    }
</style>

<div id="projects" class="d-flex flex-wrap justify-content-center align-self-center my-5">
    @foreach ($projects as $project)
        <a target="_blank" href="{{ $project['url'] ?? '#' }}" class="d-item text-center text-dark px-5">
            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="rounded-circle">
            <h1 class="my-3">{{ $project['title'] }}</h1>
            <p>{{ $project['description'] }}</p>
        </a>
    @endforeach
</div>
