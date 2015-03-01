<form name="writen" method="POST" action="/ci3/Mobilepos/writenpost" >
<div>
<table class="table">
	<tr>
<?foreach($view as $view_list):?>
		<td>제목</td><td><?=$view_list->title?></td>
		<td>작성자</td><td><?=$view_list->name?></td>
		<tr>
			<td>작성일</td><td><?=$view_list->becreated?></td>
		</tr>
		<tr>
			<td><div>내용</div><div><?=$view_list->script?></div></td>
		</tr>
	</tr>

</table>
<a href="http://soodin.cafe24.com/ci3/Mobilepos/boardupdate/<?=$view_list->seq?>"><div class="btn btn-primary">수정</div></a>
<?endforeach?>
<a href="http://soodin.cafe24.com/ci3/Mobilepos/index"><div class="btn btn-primary">목록</div></a>