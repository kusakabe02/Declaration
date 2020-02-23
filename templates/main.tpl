{include file="./tpl/mypage_header.tpl"}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="../templates/css/main.css">
<link rel="stylesheet" href="../templates/css/showtab.css">
<script src="../templates/js/showtab.js"></script>
  <!--新規宣言投稿-->
  <script type="text/javascript">
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

  </script>

{* 新規投稿 *}
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
  {* 宣言一覧あまりに長い＋タブ切り替え追加により複雑になったので別ファイル化。タブ一覧デフォルトは未達成 *}
<h2>あなたの宣言一覧</h2>
    <ul class="tab clearfix">
      <li class="active">未達成</li>
      <li>達成済み</li>
      <li>撤回済み</li>
    </ul>

<div class="area">
  <ul class="view">
    <li>{include file="./tpl/declaration_show.tpl" my_declarations=$my_declarations1}</li>
  </ul>

  <ul>
    <li>{include file="./tpl/declaration_show.tpl" my_declarations=$my_declarations2}</li>

  </ul>

  <ul>
    <li>{include file="./tpl/declaration_show.tpl" my_declarations=$my_declarations0}</li>
  </ul>
</div>

{include file="./tpl/mypage_footer.tpl"}
