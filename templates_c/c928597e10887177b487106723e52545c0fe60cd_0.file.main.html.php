<?php
/* Smarty version 3.1.34-dev-7, created on 2020-01-10 10:42:08
  from '/vagrant/templates/main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e185500b50b96_82949094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c928597e10887177b487106723e52545c0fe60cd' => 
    array (
      0 => '/vagrant/templates/main.html',
      1 => 1578652920,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e185500b50b96_82949094 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>備品管理システム メインページ</title>
<link href="../frappe_gantt/css/style.css" type="text/css" rel="stylesheet">
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js" type="text/javascript" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../frappe_gantt/js/jquery.fn.gantt.js"><?php echo '</script'; ?>
>
<!--どうしてもこのCSSやscriptはHTMLと切り離せない？-->
<style type="text/css">
    .fn-gantt *,
    .fn-gantt *:after,
    .fn-gantt *:before {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    }
    body {
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        padding: 0 0 50px 0;
    }
    .contain {
        width: 800px;
        margin: 0 auto;
    }
    h1 {
        margin: 40px 0 20px 0;
    }
    h2 {
        font-size: 1.5em;
        padding-bottom: 3px;
        border-bottom: 1px solid #DDD;
        margin-top: 50px;
        margin-bottom: 25px;
    }
    table th:first-child {
        width: 150px;
    }
</style>
</head>
<body>
  <h1>備品管理システム メインページ</h1><br />
    ようこそ<?php echo $_smarty_tpl->tpl_vars['login_name']->value;?>
 さん。
    <h2>ここに表を出力する。</h2>
      <div class="contain">
        <div class="gantt"></div>
      </div>
<!--JavaScript部分。ガントチャートを表示-->
      <?php echo '<script'; ?>
>
        $(function() {
            "use strict";
            $(".gantt").gantt({
                source: [{
                    name: '<?php echo $_smarty_tpl->tpl_vars['bihin']->value;?>
',
                    desc: "スキャナー",
                    values: [{
                        from: "2020/01/01 12:00",
                        to: "2020/01/01 13:00",
                        label: "スキャナ",
                        customClass: "ganttRed"
                    }]
                },{
                    name: "",
                    desc: "プロジェクター",
                    values: [{
                        from: "2020/01/07 18:00",
                        to: "2020/01/07 19:30",
                        label: "プロジェクター",
                        customClass: "ganttRed",
                        dataObj: "Test"
                    }]
                },{
                    name: "",
                    desc: "プロジェクター",
                    values: [{
                        from: "2020/01/07 20:00",
                        to: "2020/01/07 21:30",
                        label: "プロジェクター",
                        customClass: "ganttRed"
                    }]
                },{
                    name: "",
                    desc: "プロジェクター",
                    values: [{
                        from: "2020/01/07 22:00",
                        to: "2020/01/07 23:30",
                        label: "プロジェクター",
                        customClass: "ganttRed"
                      }]
                }],
                navigate: "scroll",
                scale: "hours",
                maxScale: "months",
                minScale: "hours",
                itemsPerPage: 10,
                months : ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
                dow : ["日", "月", "火", "水", "木", "金", "土"],
                onItemClick: function(data) {
                    alert("進捗バーがクリックされました。");
                },
                onAddClick: function(dt, rowId) {
                    alert("空白部分がクリックされました。");
                },
                onRender: function() {
                    if (window.console && typeof console.log === "function") {
                        console.log("chart rendered");
                    }
                }
            });
            prettyPrint();
        });
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
