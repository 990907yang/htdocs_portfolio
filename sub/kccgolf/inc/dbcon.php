<?php
    $host="127.0.0.1";
    $user="root";
    $pass="";
    $db="kcc";
    $dsn="mysql:host={$host};dbname={$db};charset=utf8";
    try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    //echo "접속하였습니다.";
    } catch (PDOException $e){
        echo '접속할수 없습니다. 이유:'.$e->getMessage();
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

