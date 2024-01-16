@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$type->name}}</h1>
        <h3>Post List</h3>
        <ul class="list-group list-group-flush">
            @forelse ($type->projects as $project)
                <li class="list-group-item">
                    <a href="{{route('admin.posts.show', $project->slug)}}" class="link-underline link-underline-opacity-0"> {{$project->title}}</a>
                </li>
            @empty
                <li>No posts</li>
            @endforelse
        </ul>
    </section>
@endsection