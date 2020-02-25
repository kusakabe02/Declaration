<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 12:40:34
  from '/vagrant/templates/tpl/declaration_insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e53c442d54562_59684043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e7699fd1a0d30350379bd82f28b3718bdae936f' => 
    array (
      0 => '/vagrant/templates/tpl/declaration_insert.tpl',
      1 => 1582548021,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53c442d54562_59684043 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
function send_check(){
  if(window.confirm('以下の入力した内容で宣言を行います。宜しいですか？')){
        return true;
  }
  else{
    return false;
  }
}
<?php echo '</script'; ?>
>

<br><br>
  <form action="declaration_insert.php" method="post" onsubmit="return send_check()" name="insert">
      <p>宣言タイトル：<br>
	       <input type="text" name="title"></p>
      <p>宣言内容：<br>
         <textarea name="declaration"></textarea></p>
      <p>宣言期日：<br>
        <input type="date" name="calendar" value=[$ echo date('Y-m-d';) ]>
    </p>
    <br>
      <input type="submit" value="宣言" name ="declarer_cheack">
    </p>
</form>
<?php }
}
