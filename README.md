# Scouter GitHub Laravel Test

## 開発環境
|     | バージョン |
| --- | -------- |
| PHP | 7.2.34   |

## 開発環境のセットアップ手順
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```