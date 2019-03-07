@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
            </tr>
        </thead>

        @if(count($model) > 0)
            @foreach ($model as $user)
                <tr>
                    <td>
                        <a href ="{{ route('users.edit', ['user' => $user->id])}}">{{$user->name}}</a>
                    </td>
                    <td>{{$user->email}}</td>
                    <td>
                        {{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }} 
                    </td>
                </tr>
            @endforeach
        @endif

    </table>
</div>
@endsection
