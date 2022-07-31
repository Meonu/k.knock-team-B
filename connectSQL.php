<?php
error_reporting(E_ALL);
ini_set("display_errors",1);
    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

    if ($connect) {

       echo "<h2>서버와의 연결 실패!</h2>";
    }
    else echo "<h2>서버와의 연결 성공!</h2>";

?>