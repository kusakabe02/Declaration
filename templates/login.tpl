<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>「宣言」SNS DeNS  ログイン</title>
</head>
<body>
  <h1>DeNSへログイン</h1><br />
  {$smarty.session.login_faild}

    <form method="post" action="user_login/user_login_check.php">
     <div align="left">登録宣言者名  :</div>
       <input type="text" name="user"><br />
     <div align="left">パスワード :</div>
       <input type="password" name="pass"><br />
       <br />
       <input type="submit" name="submit" value="ログイン">
       </form>
       <input type="button" name="signup" value="新規で宣言者登録（サインアップ）" onClick="window.open('../user_signup/user_signup.php')">
       <button type="button" name ="back" onclick="history.back()">一画面前へ戻る</button>

</body>
</html>
