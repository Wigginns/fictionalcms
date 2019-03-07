@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{ route('pages.create') }}">Create New</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Link</th>
            </tr>
        </thead>

        @if(count($pages) > 0)
            @foreach ($pages as $page)
                <tr>
                    <td>
                        <a href ="{{ route('pages.edit', ['page' => $page->id])}}">{{$page->title}}</a>
                    </td>
                    <td>{{$page->url}}</td>
                </tr>
            @endforeach
        @endif

    </table>
</div>
@endsection
