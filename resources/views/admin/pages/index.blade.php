@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status')}}
        </div>
    @endif
    <br>
    <a class="btn btn-primary" href="{{ route('pages.create') }}">Create New</a>

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
                <th></th>
            </tr>
        </thead>

        @if(count($pages) > 0)
            @foreach ($pages as $page)
                <tr>
                    <td>
                        <a href ="{{ route('pages.edit', ['page' => $page->id])}}">{{$page->title}}</a>
                    </td>
                    <td>{{$page->url}}</td>
                    <td>
                        <form action="{{ route('pages.destroy', ['page' => $page->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" data-toggle="confirmation" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif

    </table>
    {{$pages->links()}}
</div>

@endsection
