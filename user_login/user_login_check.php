<?php
session_start();
/*
ログインフォーム入力値を受け取り、ログイン可否を判定、判定次第でメインページまたはログインページへ転送する。
*/

require_once '../smarty/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

#DB接続
try {

  #POSTデータ受け取り
  $users_name=$_POST['user'];
  $users_pass=$_POST['pass'];

  $users_name=htmlspecialchars($users_name,ENT_QUOTES,'UTF-8');
  $users_pass=htmlspecialchars($users_pass,ENT_QUOTES,'UTF-8');

#データベース接続処理
  $pdo = new PDO('mysql:dbname=DeclarerSystem;host=localhost;charset=utf8','ehoge','Xsw2#edc');
#このPDOの処理でエラーが発生した場合、例外にスローできる。
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
#ハッシュでパスワードを取り扱っているため、一度PHPにデータを渡してからでなければ処理ができない。
#users.nameは重複を許していないので確実に目的のユーザ名が取れるはず。
  $sql = 'SELECT * FROM Declarer WHERE name = :name';
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':name',$users_name,PDO::PARAM_STR);
  $stmt->execute();
  $login_user = $stmt->fetch(PDO::FETCH_ASSOC);

//userがいなかった場合。高度な処理を組み込むときに使える？（現在は特に活用できていない）
  if(! $login_user){
    $_SESSION[login_faild] = "ユーザ名またはパスワードが一致しません";
    header('Location: ./user_login.php');
    exit();
  }
#テーブルのハッシュパスワードを取り出し、入力された文字列と比較する。
  if(! password_verify($_POST['pass'],$login_user['password'])){
    $_SESSION[login_faild] = "ユーザ名またはパスワードが一致しません";
    header('Location: ./user_login.php');
    exit();
  }

#ログイン成功
  session_regenerate_id(true);
  $_SESSION['login'] = true;
  $_SESSION['login_name'] = $login_user['name'];
  $_SESSION['login_id'] = $login_user['id'];
  header('Location: ../main/main.php');

} catch (Exception $e) {
  $smarty->assign('db_err', 'ただいまデータベースに問題が発生しております。申し訳ございません。');
  $smarty->display('err.html');
  exit();
}


$smarty->assign('test1', 'テスト1です。');
//session_destroy();

?>
