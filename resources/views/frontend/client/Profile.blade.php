@extends("frontend.layout.app")

@section("content")
<div class="portfolio">
    @auth
    @if(Auth::user()->type == 'client')
    <header>
        <h1>My Posted Jobs</h1>
    </header>
    @elseif(Auth::user()->type == 'freelancer')
    <header>
        <h1>My Portfolio</h1>
        <p>Welcome to my portfolio! Here you can find samples of my work.</p>
    </header>
    @endif

    <main>
        @if($projects->isEmpty())
        @if(Auth::user()->type == 'client')
        <p>You have no Jobs yet.</p>
        <form action="{{ route('post-job-form') }}" method="GET" class="d-flex justify-content-center">
            <button type="submit" class="post-project-btn">Post a Job</button>
        </form>
        @elseif(Auth::user()->type == 'freelancer')
        <p>You have no projects yet.</p>
        <form action="{{ route('add-project') }}" method="GET" class="d-flex justify-content-center">
            <button type="submit" class="post-project-btn">Post a Project</button>
        </form>
        @endif
        @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($projects as $project)
            <div class="col">
                <div class="card p-2 h-100">
                    @if(Auth::user()->type == 'client')
                    <h5 class="card-title d-flex justify-content-center">{{ $project->title }}</h5>
                        <p class="card-text">Description: {{ $project->description }}</p>
                        <p class="card-text">Responsibilities:{{ $project->Responsibilities }}</p>
                        <p class="card-text">Category:{{ $project->category }}</p>
                        <p class="card-text">Skills Needed: {{ $project->needed_skills }}</p>
                        <p class="card-text">Salary: ${{ $project->salary }}</p>
                    @elseif(Auth::user()->type == 'freelancer')
                    <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top img-fluid custom-img-size" alt="{{ $project->title }}">
                    <h5 class="card-title d-flex justify-content-center">{{ $project->title }}</h5>
                    <p class="card-text">Description: {{ $project->description }}</p>
                    <p class="card-text">Category:{{ $project->category }}</p>
                    @endif
                    <div class="card-body">
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-flex justify-content-center" onsubmit="return confirm('Are you sure you want to delete this project?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">
                                <i class="fas fa-trash"></i> Delete
                            </button>
                        </form>
                        <div class="card-footer mt-2">
                            <small class="text-muted">Posted {{ $project->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if(Auth::user()->type == 'client')
        <div class="d-flex justify-content-center mt-3">
            <form action="{{ route('post-job-form') }}" method="GET">
                <button type="submit" class="post-project-btn">Post a Job</button>
            </form>
        </div>
        @elseif(Auth::user()->type == 'freelancer')
        <div class="d-flex justify-content-center mt-3">
            <form action="{{ route('add-project') }}" method="GET">
                <button type="submit" class="post-project-btn">Post a Project</button>
            </form>
        </div>
        @endif
        @endif

        @if(Auth::user()->type == 'freelancer')
        <h1 class="mt-3 d-flex justify-content-center">My Applied Jobs</h1>
        @endif
    </main>
    @else
    <main>
        <p>Please <a href="{{ route('login') }}">log in</a> to view your projects.</p>
    </main>
    @endauth
</div>
@endsection