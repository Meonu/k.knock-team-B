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

$name = $_POST["username"];

$userphone = $_POST["userphone"];

$email = $_POST["useremail"];

echo "<h2>추가될 회원 정보는 $userid,$userpw,$name,$userphone,$email 입니다.</h2>";

?>  