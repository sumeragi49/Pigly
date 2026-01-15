<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/add_data.css') }}">
</head>

<body>
    <main>
        <div class="weight-form_content">
            <div class="weight-form_heading">
                <h1>Weight Logを追加</h1>
            </div>
            <form class="create-form" action="/weight_logs" method="post">
                @csrf
                <div class="form_group">
                    <div class="form_group-title">
                        <span class="form_label--item">日付</span>
                        <span class="form_label--required">必須</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input--text">
                            <input type="date" name="date" value="old('date') }}">
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
                        <span class="form_label--required">必須</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input--text">
                            <input type="numeric" name="weight" value="{{ old('weight') }}"   placeholder="50.0" >
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
                        <span class="form_label--required">必須</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input--text">
                            <input type="numeric" name="calorie" value="{{ old('calories') }}" placeholder="1200">
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
                        <span class="form_label--required">必須</span>
                    </div>
                    <div class="form_group-content">
                        <div class="form_input--text">
                            <input type="time" name="exercise_time" value="{{ old('exercise_time') }}" placeholder="00:00" >
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
                            <textarea name="exercise_content" value="{{ old('exercise_content') }}" placeholder="運動内容を追加"></textarea>
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
                    <button class="form_button-submit" type="submit">登録</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>