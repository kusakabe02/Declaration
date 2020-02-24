<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 09:37:41
  from '/vagrant/templates/tpl/mypage_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e539965450f03_47458899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b13852a38e44c3d26c753e5115e84b0a5fced02' => 
    array (
      0 => '/vagrant/templates/tpl/mypage_header.tpl',
      1 => 1582537057,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e539965450f03_47458899 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>「宣言」SNS DeNS メインページ</title>
<link rel="stylesheet" href="../templates/css/main.css">

<h1>DeNS メインページ</h1><br />
  ようこそ宣言者  <?php echo $_smarty_tpl->tpl_vars['login_name']->value;?>
 さん。
  <!--メニューバー表示-->
  <ul>
    <li class="menu"><a href="../main/main.php">マイページトップ</a></li>
    <li class="menu"><a name="logout" href="../user_logout/user_logout.php">ログアウト</a></li>
    <div id="search">
      宣言の検索
      <form method="get" action="../search/SearchForDeclaration.php" onsubmit="serch_check()" class="menu">
        <input type="text" name="search" required>
        <input type="submit" value="検索" name ="submitcommit"><br />
      </form>
    </div>

  </ul>

  <!--検索-->

</head>
<body>
<?php }
}
