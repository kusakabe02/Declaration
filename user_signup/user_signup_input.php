<?php
session_start();
/*
画面なし。処理だけ。
あくまでバリデーションチェックをして次の確認画面に渡すところまでしか書かない。
*/
$users_name=$_POST['user'];
$users_pass1=$_POST['pass1'];
$users_pass2=$_POST['pass2'];
#未入力チェック、入力文字数チェック、6~20文字の間、入力文字種類チェック、ユーザ名はアルファベットのみ
if(empty($_POST['user'])){
  $empty_form [] = "ユーザ名を入力してください。";
}elseif(strlen($users_name)<6 || strlen($users_name)>20){
  $len_form [] = "ユーザ名は6文字以上20字以内です。";
}elseif(!preg_match("/^[a-zA-Z0-9]+$/",$users_name)){
  $preg_form [] = "ユーザ名は半角英数字で入力してください。";
}
if(empty($_POST['pass1'])){
  $empty_form [] = "パスワードを入力してください";
}elseif(strlen($users_pass1)<6 || strlen($users_pass1)>20){
  $len_form [] = "パスワードは6文字以上20字以内です。";
}elseif(!preg_match("/^[!-~]+$/",$users_pass1)){
  $preg_form [] = "パスワードは半角英数字・記号で入力してください。";
}
#pass1と同じものが入力されているかチェック
if(empty($_POST['pass2'])){
  $empty_form [] = "確認パスワードを入力してください。";
}elseif($users_pass1!=$users_pass2){
  $preg_form[] = "確認パスワードが一致しません。";
}
#エラー表示用配列に値が存在しなかった（入力データに誤りがなかった）場合、POSTされたデータを次の確認画面(check)へ渡す。
#エラーがあった場合、登録画面にエラーメッセージを渡してそちらに遷移する
if(empty($empty_form) && empty($len_form) && empty($preg_form)){
  $_SESSION[input_name] = $users_name;
  $_SESSION[input_pass1] = $users_pass1;
  $_SESSION[input_pass2] = $users_pass2;
  header("Location: ./user_signup_check.php");
  exit();
}else{
  $_SESSION[err_empty] = $empty_form;
  $_SESSION[err_len] = $len_form;
  $_SESSION[err_preg] = $preg_form;
  header("Location: ./user_signup.php");
  exit();
}
session_destroy();
