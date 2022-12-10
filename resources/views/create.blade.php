@extends('layouts.app')

@section('content')

<div class="container">
    <h4>アカウント一覧</h4>
    <form action="{{ route('authority.store')}}" method="POST">
        @csrf
        <p>権限レベル：<input type="text" name="auth_level"></p>
        <button type="submit">追加</button>
    </form>
</div>
@endsection