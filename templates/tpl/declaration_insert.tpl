{* 新規投稿 *}
<script>
function send_check(){
  if(window.confirm('以下の入力した内容で宣言を行います。宜しいですか？')){
        return true;
  }
  else{
    return false;
  }
}
</script>

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
