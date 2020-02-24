{*  宣言一覧 *}
<script  type="text/javascript">
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

<div name="show">
<br>
{foreach from=$my_declarations item="my_declaration"}
<br>
タイトル：{$my_declaration['title']}
<br>
宣言者：{$my_declaration['name']}<br>
{$my_declaration['texts']}<br>
宣言日：{$my_declaration['dates']|date_format:"%Y年 %m月 %d日"}<br>
期限：{$my_declaration['period']|date_format:"%Y年 %m月 %d日"}
<br><br>
{* 達成/失敗ボタン。idはhiddenで隠す。*}
{if $my_declaration['flag'] == 1}
<div style="display:inline-flex">
  <span class="mgr-btn">
    <form action="./declaration_complete.php" method="post" onsubmit="return complete_check()">
      <input type="hidden" name="complete_id" value="{$my_declaration['id']}">
      <input type="submit" name="complete" value="達成!">
    </form>
  </span>
<form action="./declaration_faild.php" method="post" onsubmit="return faild_check()">
  <input type="hidden" name="faild_id" value="{$my_declaration['id']}">
  <input type="submit" name="faild" value="撤回…？">
</form>
</div>
{/if}

  <br>
{/foreach}
</div>
