<?php
/*
*DBを利用するための関数一覧
二語以上の時は単語の先頭を大文字にして対応する

*/
function DBconnection(){

}

function ShowDeclaration($id){
  try {

    $id=htmlspecialchars($id,ENT_QUOTES,'UTF-8');
    $pdo = new PDO('mysql:dbname=DeclarerSystem;host=localhost;charset=utf8','ehoge','Xsw2#edc');
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT * FROM Declaration WHERE declarer_id=?';
    $stmt = $pdo->prepare($sql);
    $data[]=$id;
    $stmt->execute($data);
    //SELECT結果を全部格納
    while($result =$stmt->fetch(PDO::FETCH_ASSOC));
    return $result;

    }catch (Exception $e) {
      $smarty->assign('db_err', 'ただいまデータベースに問題が発生しております。申し訳ございません。');
      $smarty->display('err.tpl');
      exit();
      }
    }



 ?>
