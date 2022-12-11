@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h4 class="mb-3">権限レベル一覧</h4>
            <form action="{{ route('authority.store')}}" method="POST">
                @csrf
                <p>権限レベル：<input type="text" class="form-control" name="auth_level"></p>
                <button class="btn btn-primary" type="submit">追加</button>
            </form>
            <div class="mt-3"><a href="{{ route('users.index') }}">一覧へ戻る</a></div>
        </div>
    </div>
    <table class="table mt-5">
        <tr><th>ID</th><th>権限レベル</th></tr>
        @foreach($auths as $auth)
            <tr>
                <td>{{ $auth->id }}</td>
                <td>{{ $auth->auth_level }}</td>
            </tr>
        @endforeach
    </table>
</div>
@endsection