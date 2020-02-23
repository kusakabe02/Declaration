<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-23 07:34:15
  from '/vagrant/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e522af72241c1_75231083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e671dfde7039c960e0e367e75fc2f19f67cd433b' => 
    array (
      0 => '/vagrant/templates/main.tpl',
      1 => 1582442886,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tpl/mypage_header.tpl' => 1,
    'file:./tpl/declaration_show.tpl' => 3,
    'file:./tpl/mypage_footer.tpl' => 1,
  ),
),false)) {
function content_5e522af72241c1_75231083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./tpl/mypage_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="../templates/css/main.css">
<link rel="stylesheet" href="../templates/css/showtab.css">
<?php echo '<script'; ?>
 src="../templates/js/showtab.js"><?php echo '</script'; ?>
>
  <!--新規宣言投稿-->
  <?php echo '<script'; ?>
 type="text/javascript">
  // 宣言確認
  function send_check(){
    if(window.confirm('以下の入力した内容で宣言を行います。宜しいですか？')){
          return true;
    }
    else{
      return false;
    }
  }

  function complete_check(){
    if(window.confirm('この宣言を「達成」とします！ 宜しいですか？')){
          return true;
    }
    else{
      return false;
    }
  }

  function faild_check(){
    if(window.confirm('この宣言を「撤回」とします…。宜しいですか？（宣言はしばらく削除されません。）')){
          return true;
    }
    else{
      return false;
    }
  }

  <?php echo '</script'; ?>
>

  <form action="declaration_insert.php" method="post" onsubmit="return send_check()" name="insert">
    <h2>新規宣言投稿</h2>
      <p>宣言タイトル：<br>
	       <input type="text" name="title"></p>
      <p>宣言内容：<br>
         <textarea name="declaration"></textarea></p>
      <p>宣言期日：<br>
        <input type="date" name="calendar" value=[$ echo date('Y-m-d';) ]>
    </p>
      <input type="submit" value="宣言" name ="declarer_cheack">
    </p>
</form>
<br>
  <h2>あなたの宣言一覧</h2>
    <ul class="tab clearfix">
      <li class="active">未達成</li>
      <li>達成済み</li>
      <li>撤回済み</li>
    </ul>

<div class="area">
  <ul class="view">
    <li><?php $_smarty_tpl->_subTemplateRender("file:./tpl/declaration_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('my_declarations'=>$_smarty_tpl->tpl_vars['my_declarations1']->value), 0, false);
?></li>
  </ul>

  <ul>
    <li><?php $_smarty_tpl->_subTemplateRender("file:./tpl/declaration_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('my_declarations'=>$_smarty_tpl->tpl_vars['my_declarations2']->value), 0, true);
?></li>

  </ul>

  <ul>
    <li><?php $_smarty_tpl->_subTemplateRender("file:./tpl/declaration_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('my_declarations'=>$_smarty_tpl->tpl_vars['my_declarations0']->value), 0, true);
?></li>
  </ul>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:./tpl/mypage_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
