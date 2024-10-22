<?php
// データベースの接続情報
// hostの部分を [DB インスタンスのエンドポイント] に変更する
define('DB_HOST', 'host:3306');
// DB に接続するためのユーザ名とパスワード、データベースを指定している
define('DB_USER', 'board_admin');  // Webアプリからのデータベースアクセス専用のユーザを指定している
define('DB_PASS', 'password');  // board_admin のパスワードを指定している
define('DB_NAME', 'board');  // Webアプリから使用するデータベースを指定している
?>
