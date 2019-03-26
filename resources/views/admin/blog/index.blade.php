@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status')}}
        </div>
    @endif
    <br>
    <a class="btn btn-primary" href="{{ route('blog.create') }}">Create New</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Slug</th>
                <th>Published</th>
            </tr>
        </thead>

        @if(count($model) > 0)
            @foreach ($model as $post)
                <tr>
                    <td>
                        <a href ="{{ route('blog.edit', ['post' => $post->id])}}">{{$post->title}}</a>
                    </td>
                    <td>
                        {{ $post->user()->first()->name }}
                    </td>
                    <td>{{$post->slug}}</td>
                    <td></td>
                </tr>
            @endforeach
        @endif

    </table>
    {{$model->links()}}
</div>
@endsection
