@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/target_weight.css') }}" >
@endsection

@section('content')
<div class="form_content">
    <form class="change-form" action="/weight_logs" method="post">
        @csrf
        <div class="change-form_content">
            <div class="form_content-title">
                <h1>目標体重設定</h1>
            </div>
            <div class="form_content-item">
                <input type="numeric" name="target_weight" >
                <p>kg</p>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-back" type="button" onClick="history.back()">戻る</button>
            <button class="form_button-update" type="submit">更新</button>
        </div>
    </form>
</div>
@endsection
