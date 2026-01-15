@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
@endsection

@section('content')
<div class="admin_container1">
    <div class="weight_container">
        <table class="weight-table">
            <tr class="weight-table_row">
                <th class="weight-table_header">目標体重</th>
                <th class="weight-table_header">目標まで</th>
                <th class="weight-table_header">最新体重</th>
            </tr>
            @foreach($users->weight_target as $user)
            <tr class="weight-table_row">
                <td class="weight-table_item">58kg</td>
                <td class="weight-table_item">kg</td>
                <td class="weight-table_item">kg</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<div class="admin_container2">
    <div class="health-container">
        <div class="health-container_inner">
            <form class="health-search_form" action="/weight_logs/search">
                <input type="date" name="start_date" value>
                <input type="date" name="end_date" value>
                <button class="search_button" type="submit">検索</button>
            </form>
            <a class="add_button" href="Weight_logs/create">データを追加</a>
        </div>
        <table class="health-table">
            <tr class="health-table_row">
                <th class="health-table_header">日付</th>
                <th class="health-table_header">体重</th>
                <th class="health-table_header">食事摂取カロリー</th>
                <th class="health-table_header">運動時間</th>
                <th class="health-table_header"></th>
            </tr>
            @foreach($users->weight_logs as $user)
            <tr class="health-table_row">
                <th class="health-table_item">{{ $user['date'] }}</th>
                <th class="health-table_item">{{ $user['weight'] }}kg</th>
                <th class="health-table_item">{{ $user['calories'] }}</th>
                <th class="health-table_item">{{ $user['exercise_time'] }}</th>
                <th class="health-table_item">
                    <a class="health-table_item" href="weight_logs/{{$weight_logs['id']}}">🖊</a>
                </th>
            </tr>
            @endforeach
        </table>
        {{ $weight_logs->links() }}
    </div>
</div>
@endsection