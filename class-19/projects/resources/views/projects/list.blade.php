@if ($projects->count())
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    My projects
                </h1>
                @foreach ($projects as $project)
                    <h3 class="subtitle">
                        <a href="">{{ $project->name }}</a>
                    </h3>
                @endforeach
            </div>
        </div>
    </section>
@endif