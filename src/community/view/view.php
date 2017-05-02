<?php 
	session_start();
	include "../db.php";
	$sql = "select * from community where idx='{$_GET['idx']}'";
	$se = $pdo->prepare($sql);
	$se->execute();
	$result = $se->fetchAll();

	$count = 1;
	if(isset($_SESSION['count'])){
		$count = $_SESSION['count'];
		$count++;
	}
	$_SESSION['count']=$count;

	$co = "update community set count='{$_POST[$count]}'";
	$go = $pdo->query($co);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
	<link rel="stylesheet" type="text/css" href="../../css/co_style.css">
</head>
<body>
	<div id="wrap">
		<section class="view">
			<?php 
				foreach( $result as $ro ){
				$text = nl2br($ro['text']);
			 ?>
			 <span>제목 : </span><div class="title"><?=$ro['title']?></div><br>
			 <span>글쓴이 : </span><div class="writer"><?=$ro['writer']?></div><br>
			 <span>날짜 : </span><div class="date"><?=$ro['date']?></div><br>
			 <span>조회수 : </span><div class="count"><?=$count?></div><br>
			 <div class="text"><?=$text?></div>
			 <?php 
			 	}
			  ?>
		</section>
	</div>
</body>
</html>