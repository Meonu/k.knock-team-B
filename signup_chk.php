<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

    if (!$connect)
     echo "<h2>서버와의 연결 실패</h2>";


$userid = $_POST["userid"];

$userpw = $_POST["userpw"];
$confirm = $_POST["pwconfirm"];

$name = $_POST["username"];

$userphone = $_POST["userphone"];

$email = $_POST["useremail"];

$sql = "insert into mem_info(userid,userpw,username,userphone,useremail) VALUES($userid,$userpw,$name,$userphine,$email)";

echo $sql;
?>  