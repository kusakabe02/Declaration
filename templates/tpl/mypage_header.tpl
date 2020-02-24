<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>「宣言」SNS DeNS メインページ</title>
<link rel="stylesheet" href="../templates/css/main.css">

<h1>DeNS メインページ</h1><br />
  ようこそ宣言者  {$login_name} さん。
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
