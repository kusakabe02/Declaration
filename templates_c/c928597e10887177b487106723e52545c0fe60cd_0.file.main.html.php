<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-11 06:38:51
  from '/vagrant/templates/main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e424bfbb41082_21191990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c928597e10887177b487106723e52545c0fe60cd' => 
    array (
      0 => '/vagrant/templates/main.html',
      1 => 1581403124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e424bfbb41082_21191990 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>「宣言」SNS DeNS メインページ</title>
<link rel="stylesheet" href="../templates/css/main.css">

<button type="button" name="logout" onclick="">ログアウト</button>
<h1>DeNS メインページ</h1><br />
  ようこそ宣言者  <?php echo $_smarty_tpl->tpl_vars['login_name']->value;?>
 さん。
  <!--メニューバー表示-->
  <ul>
    <li class="menu"><a href="./DeclarerMypage.php">マイページトップ</a></li>
    <li class="menu"><a href="./BookmarkDeclarer.php">ブックマークしたユーザ一覧</a></li>
    <li class="menu"><a href="./BookmarkDeclaration.php">ブックマークした宣言一覧</a></li>
    <li class="menu"><a href="./Etc.php">その他</a></li>
  </ul>

  <!--検索-->
  <h3>宣言の検索</h3>
  <form method="post" action="./search_commit.php">
  <input type="text" name="search">
  <input type="submit" value="検索" name ="submitcommit"><br />
  </form>
  
</head>
<body>


</body>
</html>
<?php }
}
