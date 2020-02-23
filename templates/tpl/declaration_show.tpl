{*  宣言一覧 *}
<div name="show">
<br>
{foreach from=$my_declarations item="my_declaration"}
<br>
{$my_declaration['title']}
<br>
{$my_declaration['declarer_id']}
{$my_declaration['texts']}
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
{/foreach}
</div>
