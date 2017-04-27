<?php
    include "db.php";
    
    $pnum = $_POST["phone1"].$_POST["phone2"].$_POST["phone3"];
    $phone = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/","$1-$2-$3", $pnum);

    $pnum2 = $_POST["phone11"].$_POST["phone22"].$_POST["phone33"];
    $phone2 = preg_replace("/(^02.{0}|^01.{1}|[0-9]{3})([0-9]+)([0-9]{4})/","$1-$2-$3", $pnum2);

    $sql = "insert into member set name='{$_POST['name']}' ,ename='{$_POST["ename"]}',year='{$_POST["year"]}',month='{$_POST['month']}',day='{$_POST['day']}',id='{$_POST['id']}',password='{$_POST['password']}',pnum='{$pnum}',ok='{$_POST['ok']}',email='{$_POST['email']}',add_num='{$_POST['add_num']}',address1='{$_POST['address1']}',address2='{$_POST['address2']}',DM='{$_POST['DM']}',emp='{$_POST['emp']}',op='{$_POST['op']}',sp='{$_POST['sp']}',add_num2='{$_POST['add_num2']}',address11='{$_POST['address11']}',address22='{$_POST['address22']}',pnum2='{$pnum2}',merry='{$_POST['merry']}',meyear='{$_POST['meyear']}',memonth='{$_POST['memonth']}',meday='{$_POST['meday']}'";

    $go = $pdo->query($sql);
?>

<script>
    location.href='index.php';
</script>