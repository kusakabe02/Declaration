
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

  <br>
{/foreach}
</div>
