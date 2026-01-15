@extends('layouts.app1')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_register.css') }}">
@endsection

@section('content')
<div class="register-form_content">
    <div class="register-form_header">
        <h1>PiGLy</h1>
        <h2>新規会員登録</h2>
        <h3>step2 体重のデータの入力</h3>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">現在の体重</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="text" name="weight" value="{{ old('weight') }}" placeholder="現在の体重を入力"/>
                    <p>kg</p>
                </div>
                <div class="form_error">
                    @error('weight')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">目標の体重</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="text" name="target_weight" value="{{ old('target_weight') }}" placeholder="目標の体重を入力"/>
                    <p>kg</p>
                </div>
                <div class="form_error">
                    @error('target_weight')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">アカウント作成</button>
        </div>
    </form>
</div>
@endsection