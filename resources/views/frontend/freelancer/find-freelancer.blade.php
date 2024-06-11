@extends("frontend.layout.app")

@section("content")

@if($freelancers->isEmpty())
    <h1 class="d-flex justify-content-center">No Jobs Found</h1>
    @else

<div class="Freelancer-search">
    <div class="search-bar">
        <input type="text" placeholder="Search for Freelancers" />
    </div>
    <div class="job-listings">
        @foreach($freelancers as $freelancer)
        <div class="job-listing">
            <header>{{ $freelancer->name }}</header>
            <p>{{ $freelancer->skills }}</p>
            <span>{{ $freelancer->portfolio }}</span>
            <button>Message Freelancer</button>
        </div>
        @endforeach
    </div>
    
    @if($freelancers->count() >= $limit)
    <form method="GET" action="{{ route('show-freelancers') }}">
        <input type="hidden" name="limit" value="{{ $limit + 2 }}">
        <button type="submit" class="show-more-btn">Show More</button>
    </form>
    @endif
</div>
@endif

@endsection
