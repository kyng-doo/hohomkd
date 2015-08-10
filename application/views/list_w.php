
	<script type="text/javascript">

		function checkInput()
		{
			var val1 = $("#input01").val();
			var val2 = $("#input02").val();
			var val3 = $("#input03").val();
			if(val1 == "")
			{
				alert("내용을 입력하세요.");
				$("#input01").focus();
				return;
			}

			if(val2 == "")
			{
				alert("시작일을 입력하세요.");
				$("#input02").focus();
				return;
			}

			if(val3 == "")
			{
				alert("종료일을 입력하세요.");
				$("#input03").focus();
				return;
			}

			$("#write_action").submit();
		}
		

	</script>

	<!-- borad_area -->
	<article id="bord_area" >
		<header>
			<h1>Todo 작성페이지</h1>
		</header>
	</article>
	<!-- //borad_area -->

	<form class="form-horizontal" method="post" action="" id="write_action">
		<fieldset>
			<legend>todo 작성폼</legend>
			<div class="control-group"> 
				<label class="control-label" for="input01">내용</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="input01" name="content">
					<p class="helper-block" />
				</div>
				<label class="control-label" for="input02">시작일</label>
				<div class="controls">
					<input type="date" class="input-xlarge" id="input02" name="created_on">
					<p class="helper-block" />
				</div>
				<label class="control-label" for="input03">종료일</label>
				<div class="controls">
					<input type="date" class="input-xlarge" id="input03" name="due_date">
					<p class="helper-block" />
				</div>
				<div class="form-action">
					<a href="javascript:checkInput();" class="btn btn-primary">작성하기</a>
				</div>
			</div>
		</fieldset>
	</form>
