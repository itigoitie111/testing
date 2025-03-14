# アプリケーション名
お問い合わせフォーム「testing」

## 環境構築
1,git clone  git@github.com:coachtech-material/laravel-docker-template.git
2,docker-compose up -d build

##laravel環境構築
1,docker-compose exec php bash
2,composer install
3,env.exampleファイルから.envを作成し、環境変数を変更
4,php artisan key:generate
5,php artisan migrate


## 使用技術(実行環境)
1, Laravel 8.83.8
2,nginx: 1.21.1
3, ports:80:80
4, mysql:8.0
5,php: 7.4.9-fpm
6,phpadmin: arm64v8/phpmyadmin
 (platform: linux/arm64)


## ER図
< - - - 作成したER図の画像 - - - >

すいません、作れませんでした

## URL
・開発環境：http://localhost/
・phpMyadmin：http://localhost:8080/


