    @extends('layouts.app')
    @section('content')

    <div class="card">
    <div class="card-header">
        Post Info
    </div>
    <div class="card-body">
    @if ($post->image)
                <img src="{{asset("images/posts/{$post->image}")}}" width="250" height="200">
            @endif
            <blockquote class="blockquote mb-0">
        <h5 class="card-title">Title:-</h5>
        <p class="card-text">{{$post->title}}</p>
        <h5 class="card-title">Description:-</h5>
        <p class="card-text">{{$post->description}}</p>
        <h5 class="card-title">Posted by:-</h5>
        <p class="card-text">{{ optional($post->creator)->name ?? 'Unknown Creator' }}</p>
        <h5 class="card-title">Created at:-</h5>
        <p class="card-text">{{ \Carbon\Carbon::parse($post->created_at)->format('Y-m-d') }}</p>
    </div>
    </div>
    <a href="{{route("posts.index")}}" class="btn btn-primary mt-3">Back to all Posts </a>

    @endsection
