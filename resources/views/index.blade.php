@extends('layouts.app')

@section('content')
    ユーザー一覧<br>
    <table>
        <tr><th>ユーザーID</th><th>名前</th><th>権限レベル</th></tr>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->auth_id->auth_level }}</td>
        </tr>
    @endforeach
    </table>
@endsection