@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register-form_content">
    <div class="register-form_header">
        <h1>PiGLy</h1>
        <h2>新規会員登録</h2>
        <h3>STEP1 アカウント情報の登録</h3>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">お名前</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="名前を入力"/>
                </div>
                <div class="form_error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">メールアドレス</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレスを入力"/>
                </div>
                <div class="form_error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">パスワード</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="password" name="password" placeholder="パスワードを入力"/>
                </div>
                <div class="form_error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-step2" type="submit">次に進む</button>
        </div>
    </form>
    <div class="login_link">
        <a class="login_button-submit" href="/login">ログインはこちら</a>
    </div>
</div>
@endsection