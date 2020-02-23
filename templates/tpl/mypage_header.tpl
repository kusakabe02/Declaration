<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>「宣言」SNS DeNS メインページ</title>
<link rel="stylesheet" href="../templates/css/main.css">

<button type="button" name="logout" onclick="">ログアウト</button>
<h1>DeNS メインページ</h1><br />
  ようこそ宣言者  {$login_name} さん。
  <!--メニューバー表示-->
  <ul>
    <li class="menu"><a href="../main/main.php">マイページトップ</a></li>
    <li class="menu"><a href="./BookmarkDeclarer.php">ブックマークしたユーザ一覧</a></li>
    <li class="menu"><a href="./BookmarkDeclaration.php">ブックマークした宣言一覧</a></li>
    <li class="menu"><a href="./Etc.php">その他</a></li>
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
