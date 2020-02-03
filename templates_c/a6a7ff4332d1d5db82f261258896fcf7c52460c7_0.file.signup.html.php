<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-30 07:17:18
  from '/vagrant/templates/signup.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e09a47e9a6295_17870830',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6a7ff4332d1d5db82f261258896fcf7c52460c7' => 
    array (
      0 => '/vagrant/templates/signup.html',
      1 => 1577690234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e09a47e9a6295_17870830 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>備品管理システム ユーザ登録</title>
</head>
<body>
  <h1>備品管理システム ユーザ登録</h1><br />
  <?php if (isset($_smarty_tpl->tpl_vars['err_empty']->value) || isset($_smarty_tpl->tpl_vars['err_len']->value) || isset($_smarty_tpl->tpl_vars['err_preg']->value)) {?>
    <ul class="err_msg">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['err_empty']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['err_len']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['err_preg']->value, 'msg');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
?>
      <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  <?php }?>

  <?php if (isset($_smarty_tpl->tpl_vars['err_login']->value)) {?>
    <?php echo $_smarty_tpl->tpl_vars['err_login']->value;?>

  <?php }?>

    <br />
    <form method="post" action="user_signup_input.php">
     <div align="left">ユーザ名を入力してください。  :</div>
       <input type="text" name="user"><br />
     <div align="left">パスワードを入力してください。:</div>
       <input type="password" name="pass1"><br />
       <br />
       <div align="left">確認のため再度パスワードを入力してください。:</div>
         <input type="password" name="pass2"><br />
         <br />
       <input type="submit" name="submit" value="上記内容で登録">
       </form>
       <button type="button" name ="back" onclick="history.back()">戻る</button>
</body>
</html>
<?php }
}
