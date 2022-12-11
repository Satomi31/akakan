@extends('layouts.app')

@section('content')

<div class="container">
    <h4 class="mb-3">権限レベル編集</h4>
    <table class="table table-borderless">
        <tr><th>ID：</th><td>{{ $user->id }}</td></tr>
        <tr><th>名前：</th><td>{{ $user->name }}</td></tr>
        <tr><th>メールアドレス：</th><td>{{ $user->email }}</td></tr>
        <form action="{{ route('users.update', $user->id)}}" method="POST">
            @csrf
            @method('put')
            <tr>
                <th>権限レベル：</th>
                <td><input type="text" class="form-control" name="auth_id"></td>
                <td><button class="btn btn-primary" type="submit">更新</button></td>
            </tr>
        </form>
        <tr><td><a href="{{ route('users.index') }}">一覧へ戻る</a></td></tr>
    </table>
</div>
@endsection