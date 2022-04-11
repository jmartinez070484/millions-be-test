@extends('layout.standard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 mb-3 mt-3">
            <h1 class="text-xl font-bold">{{ $post -> title }}</h1>
            <small>Published on <b>{{ \Carbon\Carbon::parse($post -> created_date)->format('F d, Y') }}</b> by <b>{{ $post -> user -> first_name }} {{ $post -> user -> last_name }}</b> | {{ $post -> likes -> count() }} Likes</small>
            <p class="mt-2">{!! $post -> content !!}</p>
        </div>
    </div>
</div>

@endsection
