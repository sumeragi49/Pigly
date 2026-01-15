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
・mysql 8.0.26
・nginx 1.21.1
<img width="1700" height="1333" alt="スクリーンショット 2026-01-15 231731" src="https://github.com/user-attachments/assets/599696bf-e749-4c2b-9dab-d11d6f4af64f" />

