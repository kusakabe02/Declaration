<?php
/* Smarty version 3.1.34-dev-7, created on 2019-12-16 10:46:36
  from '/vagrant/templates/input.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5df7608c07e6c7_88159864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaafd2ca6583ca64ca4f0cec0a9ab154e92b0bcd' => 
    array (
      0 => '/vagrant/templates/input.html',
      1 => 1576493183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5df7608c07e6c7_88159864 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset=utf-8" />
<title>備品管理システム チェック</title>
</head>
<body>
  <h2>以下の内容でユーザ登録をします。よろしいですか？</h2><br />
    <form method="post" action="user_login_check.php">
     <div align="left">ユーザ名  : <?php echo $_smarty_tpl->tpl_vars['input_data']->value;?>
 <br /></div>      
       <br />
       <input type="submit" name="submit" value="登録">
       </form>
       <button type="button" name ="back" onclick="history.back()">戻る</button>

</body>
</html>
<?php }
}
