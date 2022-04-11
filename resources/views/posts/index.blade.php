@extends('layout.standard')

@section('content')

<div class="container">
    <div class="row">
        @foreach($posts -> items() as $post)
        <div class="col-12 mb-3 mt-3">
            <h1 class="text-xl font-bold">{{ $post -> title }}</h1>
            <small>Published on <b>{{ \Carbon\Carbon::parse($post -> created_date)->format('F d, Y') }}</b> by <b>{{ $post -> user -> first_name }} {{ $post -> user -> last_name }}</b> | {{ $post -> likes -> count() }} Likes</small>
            <p class="mt-2">{{ Str::limit($post -> content,220) }}...</p>
            <a href="{{ route('posts.show',['post'=>$post -> slug]) }}" class="btn float-right">Read More</a>
        </div>
        @endforeach
        @if($posts -> hasPages())
        <div class="col-12 mt-5 mb-5">
            {!! $posts -> links() !!}
        </div>
            @endif
    </div>
</div>

@endsection
