<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

    $no = $_GET["no"];

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>비밀번호를 입력하세요.</h4>
    <form action="./pwcheck.php?no=<? echo $no ?>" method="post">
    <input type="password" name="pw" id="pw" placeholder="비밀번호">
    </form>
</body>
</html>