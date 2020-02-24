{include file="./tpl/mypage_header.tpl"}
<button type="button" name ="back" onclick="history.back()">戻る</button>
<h2>宣言検索結果</h2><br>
ヒット数：{count($search_results)}件<br><br>
{foreach from=$search_results item=result}
<div name=search_result>
宣言タイトル: {$result['title']}<br>
宣言日： {$result['dates']|date_format:"%Y年 %m月 %d日"}<br>
宣言期日：{$result['period']|date_format:"%Y年 %m月 %d日"}<br>
</div>
<br>
{/foreach}

{include file="./tpl/mypage_footer.tpl"}
