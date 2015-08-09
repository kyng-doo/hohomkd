
	
	<!-- borad_area -->
	<article id="bord_area" >
		<header>
			<h1>Todo목록</h1>
		</header>
		<table cellspacing="0" cellpadding="0" class="table table-striped">
			<caption>Todo목록</caption>
			<thead>
				<tr>
					<th scope="col">번호</th>
					<th scope="col">내용</th>
					<th scope="col">시작일</th>
					<th scope="col">종료일</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($list as $li):?>
				<tr scope="row">
					<td><?= $li->id ?></td>
					<td><a rel="external" href="/main/view/<?= $li->id ?>"><?= $li->content ?></a></td>
					<td><time datetime="<?= mdate("%Y-%M-%j", human_to_unix($li->created_on)) ?>"><?= $li->created_on ?></time></td>
					<td><time datetime="<?= mdate("%Y-%M-%j", human_to_unix($li->due_date)) ?>"><?= $li->due_date ?></time></td>
				</tr>
				<?php endforeach;?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="4"><a href="/main/write/" class="btn btn-success" style="width:80px">쓰기</a></td>
				</tr>
			</tfoot>
			
		</table>
	</article>
	<!-- //borad_area -->