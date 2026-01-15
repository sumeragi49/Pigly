@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="weight-form_content">
    <div class="weight-form_heading">
        <h1>Weight Log</h1>
    </div>
    <form class="update-form" action="{{$weight_logs['id']??'N/A'}}/update" method="post">
        @method('patch')
        @csrf
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">日付</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="date" name="date" value="{{ $weight_logs['date']??'N/A' }}">
                    <input type="hidden" name="id" value="{{ $weight_logs['id']??'N/A' }}">
                </div>
                <div class="form_error">
                    @error('date')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">体重</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="numeric" name="weight" value="{{ $weight_logs['weight']??'N/A' }}" >
                    <input type="hidden" name="id" value="{{ $weight_logs['id']??'N/A' }}">
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
                <span class="form_label--item">摂取カロリー</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="numeric" name="calorie" value="{{ $weight_logs['calories']??'N/A' }}" >
                    <input type="hidden" name="id" value="{{ $weight_logs['id']??'N/A' }}">
                </div>
                <p>cal</p>
                <div class="form_error">
                    @error('calorie')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">運動時間</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="time" name="exercise_time" value="{{ $weight_logs['exercise_time']??'N/A' }}" >
                    <input type="hidden" name="id" value="{{ $weight_logs['id']??'N/A' }}">
                </div>
                <div class="form_error">
                    @error('exercise_time')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">運動内容</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--textarea">
                    <textarea name="exercise_content" value="{{ $weight_logs['exercise_content']??'N/A' }}" placeholder="運動内容を追加"></textarea>
                    <input type="hidden" name="id" value="{{ $weight_logs['id']??'N/A' }}">
                </div>
                <div class="form_error">
                    @error('date')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form_button">
            <button class="form_button-back" type="button" onClick="history.back()">戻る</button>
            <button class="form_button-update" type="submit">更新</button>
        </div>
    </form>
    <form class="delete-form" action="/weight_logs/{{ $weight_logs['id']??'N/A' }}/delete" method="post">
        @method('delete')
        @csrf
        <div class="form_button">
            <input type="hidden" name="id" value="{{ $weight_logs['id']??'N/A' }}">
            <button class="form_button-delete" type="submit">削除</button>
        </div>
    </form>
</div>
@endsection