
	<!-- borad_area -->
	<article id="bord_area" >
		<header>
			<h1>Todo 조회</h1>
		</header>
		<table cellspacing="0" cellpadding="0" class="table table-striped">
			<caption>Todo 조회 테이블</caption>
			<thead>
				<tr>
					<th scope="col"><?=$id?> 번 할일</th>
					<th scope="col">시작일 : <?=$views->created_on;?></th>
					<th scope="col">종료일 : <?=$views->due_date;?></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="3">
						<?=$views->content?>
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="3">
						<a href="/main/lists/" class="btn btn-primary" style="width:80px">목록</a>
						<a href="/main/delete/<?=$id?>" class="btn btn-danger" style="width:80px">삭제</a>
						<a href="/main/write/" class="btn btn-success" style="width:80px">쓰기</a>
					</td>
				</tr>
			</tfoot>
			
		</table>
	</article>
	<!-- //borad_area -->
