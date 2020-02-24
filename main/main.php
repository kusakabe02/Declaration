<?php
session_start();
require_once '../smarty/Smarty.class.php';
require '../function/Database_function.php';

$smarty = new Smarty();
$smarty->template_dir = '../templates/';
$smarty->compile_dir  = '../templates_c/';

//ログインしているか判定し、していない場合はサインアップページへ飛ばす。ログインしていれば、メッセージセット。
if(isset($_SESSION['login'])==false){
$_SESSION[err_login] = "ユーザー登録をされていません。ユーザ登録を行ってください。";
header('Location: ../user_signup/user_signup.php');
}
else{
  //0～2:自分の投稿一覧の取得 3:みんなの投稿取得
  try {
    $id=htmlspecialchars($_SESSION['login_id'],ENT_QUOTES,'UTF-8');
    $pdo = new PDO('mysql:dbname=DeclarerSystem;host=localhost;charset=utf8','ehoge','Xsw2#edc');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    /* where追加、flag追加し三回行う。 */
    $sql0 = 'SELECT Declaration.*,Declarer.name,Declarer.image_path FROM  Declaration LEFT OUTER JOIN Declarer ON Declaration.declarer_id = Declarer.id WHERE declarer_id=? and flag=0';
    $stmt0 = $pdo->prepare($sql0);
    $data0[]=$id;
    $stmt0->execute($data0);
    $result0 = $stmt0->fetchAll(PDO::FETCH_ASSOC);
    $smarty->assign('my_declarations0',$result0);

    $sql1 = 'SELECT Declaration.*,Declarer.name,Declarer.image_path FROM  Declaration LEFT OUTER JOIN Declarer ON Declaration.declarer_id = Declarer.id WHERE declarer_id=? and flag=1';
    $stmt1 = $pdo->prepare($sql1);
    $data1[]=$id;
    $stmt1->execute($data1);
    $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    $smarty->assign('my_declarations1',$result1);

    $sql2 = 'SELECT Declaration.*,Declarer.name,Declarer.image_path FROM  Declaration LEFT OUTER JOIN Declarer ON Declaration.declarer_id = Declarer.id WHERE declarer_id=? and flag=2';
    $stmt2 = $pdo->prepare($sql2);
    $data2[]=$id;
    $stmt2->execute($data2);
    $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    $smarty->assign('my_declarations2',$result2);

    $sql3 = 'SELECT Declaration.*,Declarer.name,Declarer.image_path FROM  Declaration LEFT OUTER JOIN Declarer ON Declaration.declarer_id = Declarer.id WHERE declarer_id!=?';
    $stmt3 = $pdo->prepare($sql3);
    $data3[]=$id;
    $stmt3->execute($data2);
    $result3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
    $smarty->assign('my_declarations3',$result3);


    /*SELECT結果を全部格納
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $smarty->assign('my_declarations0',$result);
    $smarty->assign('my_declarations1',$result);
    $smarty->assign('my_declarations2',$result);
    */

    }catch (Exception $e) {
      $smarty->assign('db_err', 'ただいまデータベースに問題が発生しております。申し訳ございません。');
      $smarty->display('err.tpl');
      exit();
      }

  $smarty->assign('login_name',$_SESSION['login_name']);
  $smarty->assign('login_id',$_SESSION['login_id']);
  $smarty->display('main.tpl');

}


?>
