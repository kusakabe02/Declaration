<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-24 13:09:29
  from '/vagrant/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e53cb0970c793_97738116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e671dfde7039c960e0e367e75fc2f19f67cd433b' => 
    array (
      0 => '/vagrant/templates/main.tpl',
      1 => 1582549598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tpl/mypage_header.tpl' => 1,
    'file:./tpl/declaration_show.tpl' => 3,
    'file:./tpl/declaration_insert.tpl' => 1,
    'file:./tpl/others_declaration_show.tpl' => 1,
    'file:./tpl/comingsoon.tpl' => 2,
    'file:./tpl/mypage_footer.tpl' => 1,
  ),
),false)) {
function content_5e53cb0970c793_97738116 (Smarty_Internal_Template $_smarty_tpl) {
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
  // 作りかけ

  function bookmark_change(){
    var img = document.getElementById("bookmark");
    img.setAttribute('src', '../img/icon/truebookmark.png');
    if(getElementById("true"))){
      document.setAttribute('src', '../img/icon/falsebookmark.png');
    }
    else{
      document.setAttribute('src', '../img/icon/truebookmark.png');
    }
  }

  <?php echo '</script'; ?>
>

<br>
  <h2>「宣言」メニュー</h2>
    <ul class="tab clearfix">
      <li class="active">あなたの未達成宣言一覧</li>
      <li>あなたの達成済み宣言一覧</li>
      <li>あなたの撤回済み宣言一覧</li>
      <li>宣言新規投稿</li>
      <li>みんなの宣言</li>
      <li>ブックマーク宣言</li>
      <li>プロフィール</li>
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

  <ul>
    <li><?php $_smarty_tpl->_subTemplateRender("file:./tpl/declaration_insert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></li>
  </ul>

  <ul>
    <li><?php $_smarty_tpl->_subTemplateRender("file:./tpl/others_declaration_show.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('my_declarations'=>$_smarty_tpl->tpl_vars['my_declarations3']->value), 0, false);
?></li>
  </ul>

  <ul>
    <li><?php $_smarty_tpl->_subTemplateRender("file:./tpl/comingsoon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></li>
  </ul>

  <ul>
    <li><?php $_smarty_tpl->_subTemplateRender("file:./tpl/comingsoon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li>
  </ul>


</div>

<?php $_smarty_tpl->_subTemplateRender("file:./tpl/mypage_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
