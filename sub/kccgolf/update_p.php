<?php
    include "db.php";

    //파일업로드
    $file = $_FILES['upload']['name'];
    $file_dir = $_SERVER['DOCUMENT_ROOT'].'\\fileupload\\\\up\\';
    $time = md5(microtime());
    $img_dir = "/fileupload/up/".$time.$file;
    $file_path = $file_dir.$time.$file;
    if($_FILES['upload']['size']<1000000){
    move_uploaded_file($_FILES['upload']['tmp_name'],$file_path);
        echo "<script>location.href='sub1.php';</script>";
    }else{
        echo "<script>alert('첨부파일 용량초과');location.href='sub1.php';</script>"; 
    }

    $sql = "update board set title='{$_POST['title']}',writer='{$_POST['writer']}',content='{$_POST['content']}',upload='{$img_dir}' where idx='{$_GET['idx']}'";
    $go = $pdo->query($sql);
?>