{include file="./tpl/mypage_header.tpl"}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="../templates/css/main.css">
<link rel="stylesheet" href="../templates/css/showtab.css">
<script src="../templates/js/showtab.js"></script>
  <!--新規宣言投稿-->
  <script type="text/javascript">
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

  </script>

<br>
  {* 宣言一覧あまりに長い＋タブ切り替え追加により複雑になったので別ファイル化。タブ一覧デフォルトは未達成 *}
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
    <li>{include file="./tpl/declaration_show.tpl" my_declarations=$my_declarations1}</li>
  </ul>

  <ul>
    <li>{include file="./tpl/declaration_show.tpl" my_declarations=$my_declarations2}</li>
  </ul>

  <ul>
    <li>{include file="./tpl/declaration_show.tpl" my_declarations=$my_declarations0}</li>
  </ul>

  <ul>
    <li>{include file="./tpl/declaration_insert.tpl"}</li>
  </ul>

  <ul>
    <li>{include file="./tpl/others_declaration_show.tpl" my_declarations=$my_declarations3}</li>
  </ul>

  <ul>
    <li>{include file="./tpl/comingsoon.tpl"}</li>
  </ul>

  <ul>
    <li>{include file="./tpl/comingsoon.tpl"}</li>
  </ul>


</div>

{include file="./tpl/mypage_footer.tpl"}
