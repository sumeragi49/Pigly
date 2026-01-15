環境構築

Dockerビルド
・git clone git@github.com:sumeragi49/Pigly.git
・docker-compose up -d --build

Laravel環境構築
・docker-compose exec php bash
・composer install
・cp .env.example .env 
・php artisan key:generate
・php artisan migrate
・php artisan db:seed

開発環境
・登録ページ　http://localhost/register
・ログインページ　http://localhost/login
・詳細ページ　http://localhost/weight_logs/{{weight_logs_id}}
({{weight_logs_id}}には数字のみ入力）

使用技術（実行環境）
・Conposer version 2.9.3
・laravel/laravel(v8.6.12)
