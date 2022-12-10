@extends('layouts.app')

@section('content')

<div class="container">
    <h4>権限レベル編集</h4>
    <div>{{ $user->id }}</div>
    <div>{{ $user->name }}</div>
    <div>{{ $user->email }}</div>
    <form action="{{ route('user.update', $user->id)}}" method="POST">
        @csrf
        @method('put')
        <p>権限レベル：<input type="text" name="auth_id"></p>
        <button type="submit">更新</button>
    </form>
</div>
@endsection