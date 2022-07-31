<?php
    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($server, $user, $password, $DBname);

    if ($connect -> connect_error) {

       echo "<h2>서버와의 연결 실패!</h2>";
    }
    else echo "<h2>서버와의 연결 성공!</h2>";

?>