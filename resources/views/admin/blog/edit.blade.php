@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Blog Post</h1>
    <form action="{{ route('blog.update', ['blog' => $model->id]) }}" method="post">
        {{ method_field('PUT') }}
        @include('admin.blog.partials.fields')
    </form>

    <form action="{{ route('pages.destroy', ['blog' => $model->id]) }}" method="post" class="float-right">
        {{ method_field('DELETE') }}
        <button class="btn btn-danger">Delete Blog Post</button>
    </form>
</div>
@endsection
