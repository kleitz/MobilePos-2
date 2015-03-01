<span> 총게시물의 건수 : <?=$total_rows?></span> 
<table  class="table">
	<tr>
		<th>게시물 번호</th>
		<th>제목</th>
		<th>작성자</th>
		<th>조회수</th>
		<th>작성일</th>
	</tr>
<?foreach($list as $board_list):?>
		<tr>
			<td>
				<a href="http://soodin.cafe24.com/ci3/Mobilepos/boardview/<?=$board_list->seq?>">
					<?=$board_list->seq?>
				</a>
			</td>	
			<td><a href="http://soodin.cafe24.com/ci3/Mobilepos/boardview/<?=$board_list->seq?>"><?=$board_list->title?></a></td>
			<td><a href="http://soodin.cafe24.com/ci3/Mobilepos/boardview/<?=$board_list->seq?>"><?=$board_list->name?></a></td>
			<td><?=$board_list->hit?></td>
			<td><?=$board_list->becreated?></td>
			<th>
			</th>
		</tr>
<?endforeach?>
</table>
<a href="http://soodin.cafe24.com/ci3/Mobilepos/board"><div class="btn btn-primary">쓰기</div></a>
