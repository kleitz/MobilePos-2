<?foreach($update as $update_list):?>
<form name="writen" method="POST" action="/ci3/Mobilepos/boardrewrite/<?=$update_list->seq?>" >

<div>
제목<?=$update_list->title?>
</div>
<div>
이름<?=$update_list->name?>
</div>
내용<textarea type="text" cols=60 rows=14 name="script" size="39"><?=$update_list->script?></textarea>
<?endforeach?>
<input type=submit value="등록">
</form>
<a href="http://soodin.cafe24.com/ci3/Mobilepos/index"><div class="btn btn-primary">목록</div></a>