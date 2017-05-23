<?php 
	include "../db.php";
	$sql = "select * from community where idx='{$_GET['idx']}'";
	$se = $pdo->prepare($sql);
	$se->execute();
	$result = $se->fetchAll();
?>
<!doctype html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
	<div class="wrap">
		<header id="header"></header>
		<section id="section">
			<h5>VIEW</h5>

			<div class="board">
				<div class="view">
				<?php 
					foreach( $result as $ro ){
					$text = nl2br($ro['text']);
				 ?>
					<div class="idx"><?=$ro['idx']?></div>
					<div class="title"><?=$ro['title']?></div>
					<div class="writer"><?=$ro['writer']?></div>
					<div class="count"><?=$ro['count']?></div>
					<div class="text"><?=$text?></div>

					<a href="../index.php" class="write_btn">목록</a>
					<a href="./update.php" class="write_btn">수정</a>
					<a href="./delete_ok.php" class="write_btn">삭제</a>
					<?php 
			 			}
			  		?>
				</div>
			</div>
		</section>
	</div>
</body>
</html>