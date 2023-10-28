# contact-form & management

### お客様からのお問い合わせ情報の取得と、その管理をするアプリケーションです。

お問い合わせフォームで、お問い合わせ情報が追加されます。  
お問い合わせフォームは、  
「内容入力画面」→「内容確認画面」→「送信完了画面」  
の順で遷移します。  
お問い合わせ画面への url は  
http://localhost  
を設定しています。

管理システムでは、お問い合わせ情報をキーワードで検索でき、また検索結果から情報の削除ができます。  
管理画面への url は  
http://localhost/managements  
を設定しています。

↓ こちらがトップ画像です。  
![localhost_](https://github.com/ibukina/2023_nakamura_advance/assets/142294463/1eb7e9d1-54d6-429c-b709-81e9bd4cdcbe)

## 作成した目的

確認テストとして制作しました。

## 機能一覧

お問い合わせ画面：追加機能

管理画面：検索機能、削除機能

## 使用技術(実行環境)

PHP 8.2.10  
Laravel 8.83.27  
Composer 2.6.3  
mysql 8.0.26  
phpMyAdmin 5.2.1

## テーブル設計

contactsTable  
![localhost_8080_index php_route=_table_structure db=laravel_db table=contacts (1)](https://github.com/ibukina/2023_nakamura_advance-test/assets/142294463/c1e7b893-ab83-4ce6-99e6-727a67cea5fb)

managementTable  
![localhost_8080_index php_route=_table_structure db=laravel_db table=management](https://github.com/ibukina/2023_nakamura_advance-test/assets/142294463/113bf31c-faa1-47e9-9477-ba9a27b9f56b)

## ER 図

![usecase drawio](https://github.com/ibukina/2023_nakamura_advance/assets/142294463/964cf92c-1878-422b-876b-1f20510ef441)

## 補足

エラーに対応できておらず、未完成です。申し訳ございません。
