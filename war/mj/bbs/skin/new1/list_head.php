<?$coloring=0;?>
<?	$a_vote2="<a onfocus=blur() href='$PHP_SELF?$href&select_arrange=vote&desc=$t_desc'>";?>
<form method="post" name="list" action="list_all.php">
<input type="hidden" name="page" value="<?=$page?>" />
<input type="hidden" name="id" value="<?=$id?>" />
<input type="hidden" name="select_arrange" value="<?=$select_arrange?>" />
<input type="hidden" name="desc" value="<?=$desc?>" />
<input type="hidden" name="page_num" value="<?=$page_num?>" />
<input type="hidden" name="selected" />
<input type="hidden" name="exec" />
<input type="hidden" name="keyword" value="<?=$keyword?>" />
<input type="hidden" name="sn" value="<?=$sn?>" />
<input type="hidden" name="ss" value="<?=$ss?>" />
<input type="hidden" name="sc" value="<?=$sc?>" />
<?$a_vote = str_replace(">",">",$a_vote);?>
<table border="0" cellspacing="0" class="boardlisttext">
<!-- 제목 -->
<thead>
<tr>
<th scope="col">번호</th>
<th scope="col">제목</th>
<th scope="col">작성자</th>
<th scope="col">작성일</th>
<th scope="col"><?=$a_hit?>조회</a></th>
<th scope="col" class="good"><?=$a_vote2?>추천</a></th>
</tr>
</thead>
<tbody>