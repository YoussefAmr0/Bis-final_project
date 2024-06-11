@extends("frontend.layout.app")

@section("content")

    <div class="job-description">
      <header>
        <div class="title">
          <h2>{{ $project->title }}</h2>
          <p>Salary: ${{$project->salary}}</p>
        </div>
        <p>Posted {{ $project->created_at->diffForHumans() }}</p>
      </header>
      <div class="content">
        <div class="requirements">
          <h3>Requirements:</h3>
          <ul>
            <li>{{$project->needed_skills}}</li>
          </ul>
        </div>
        <div class="responsibilities">
          <h3>Responsibilities:</h3>
          <ul>
            <li>{{$project->Responsibilities}}</li>
          </ul>
        </div>
        <div class="about-project">
          <h3>About Project:</h3>
          <p>{{ $project->description }}</p>
        </div>
        <div class="apply-buttons">
        <form action="" method="POST">
                @csrf
                <button type="submit" class="apply-button">Apply</button>
            </form>
          <button class="message-client-button">Message Client</button>
        </div>
      </div>
    </div>

@endsection