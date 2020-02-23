<?php
/*
* ユーザが投稿内容を確認後宣言の追加処理を行う。
*/
session_start();
require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';
date_default_timezone_set('Asia/Tokyo');
#ログインしているか判定し、していない場合はサインアップページへ飛ばす。ログインしていれば、メッセージセット。
if(isset($_SESSION['login'])==false){
$_SESSION[err_login] = "ユーザー登録をされていません。ユーザ登録を行ってください。";
header('Location: ../user_signup/user_signup.php');
}
else{
  #DB接続
  try {

    #POSTデータ受け取り
    $insert_title=$_POST['title'];
    $insert_declaration=$_POST['declaration'];
    $insert_calendar=$_POST['calendar'];

    $insert_title=htmlspecialchars($insert_title,ENT_QUOTES,'UTF-8');
    $insert_declaration=htmlspecialchars($insert_declaration,ENT_QUOTES,'UTF-8');
    $insert_calendar=htmlspecialchars($insert_calendar,ENT_QUOTES,'UTF-8');
    #データベース接続処理
      $pdo = new PDO('mysql:dbname=DeclarerSystem;host=localhost;charset=utf8','ehoge','Xsw2#edc');
    #このPDOの処理でエラーが発生した場合、例外にスローできる。
      $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    #ハッシュでパスワードを取り扱っているため、一度PHPにデータを渡してからでなければ処理ができない。
    #users.nameは重複を許していないので確実に目的のユーザ名が取れるはず。
      $sql = 'INSERT INTO Declaration(title,declarer_id,texts,period,flag,dates,good,bookmark) VALUES(?,?,?,?,?,?,?,?)';
      $stmt = $pdo->prepare($sql);
      $data[]=$insert_title;
      $data[]=$_SESSION['login_id'];
      $data[]=$insert_declaration;
      $data[]=$insert_calendar." 00:00:00";
      $data[]=true;
      $data[]=date("Y-m-d");
      $data[]=0;
      $data[]=0;
      $stmt->execute($data);
      #処理成功後、元の画面へ遷移
      header('Location: ../main/main.php');

      } catch (Exception $e) {
        $smarty->assign('db_err', 'ただいまデータベースに問題が発生しております。申し訳ございません。');
//デバッグ、テスト用
        $smarty->assign('err_msg',$e->getMessage());
        $smarty->assign('check',$_SESSION['login_id']);
        $smarty->display('err.tpl');
        exit();
      }

  $smarty->assign('login_name',$_SESSION['login_name']);
  $smarty->assign('login_id',$_SESSION['login_id']);

}
?>
