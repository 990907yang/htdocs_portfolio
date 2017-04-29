<?php 
	include "../db.php";
	$sql = "insert into community set title='{$_POST['title']}',writer='{$_POST['writer']}',text='{$_POST['text']}'";
	$go = $pdo->query($sql);
 ?>

<script>
	location.href='../../../index.php';
</script>