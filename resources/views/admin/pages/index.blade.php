@extends('layouts.app')

@section('content')
<div class="container">
    <a class=btn href="{{ route('pages.create') }}">Create New</a>
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
                    <td>{{$page->title}}</td>
                    <td>{{$page->url}}</td>
                </tr>
            @endforeach
        @endif

    </table>
</div>
@endsection
