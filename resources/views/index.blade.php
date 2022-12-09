@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>アカウント一覧</h4>
        <table class="table">
            @if($user_auth_id == 2 )
                <tr><th>ユーザーID</th><th>名前</th><th>メールアドレス</th><th>権限レベル</th></tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->authority->auth_level }}</td>
                    </tr>
                @endforeach
            @elseif($user_auth_id == 3)
                <tr><th>ユーザーID</th><th>名前</th></tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                @endforeach
            @else
                <tr><th>名前</th></tr>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection