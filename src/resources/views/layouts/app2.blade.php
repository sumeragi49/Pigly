<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigly</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/common2.css') }}" >
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header_inner">
            <div class="header-utilities">
                <a class="header_logo" href="/login">Pigly</a>
                <nav>
                    <ul class="header-nav">
                        @if (Auth::check())
                        <li class="header-nav_item">
                            <a class="header-nav_button" href="Weight_logs/goal_setting">目標体重設定</a>
                        </li>
                        <li class="header-nav_item">
                            <form class="form" action="/logout" method="post">
                                @csrf
                                <button class="header-nav_button">ログアウト</button>
                            </form>
                        </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>