@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" >
@endsection

@section('content')
<div class="register-form_content">
    <div class="register-form_header">
        <h1>PiGLy</h1>
        <h2>ログイン</h2>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
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
            <button class="form_button-submit" type="submit">ログイン</button>
        </div>
    </form>
    <div class="register_link">
        <a class="register_button-submit" href="/register/step1">アカウント作成はこちら</a>
    </div>
</div>
@endsection