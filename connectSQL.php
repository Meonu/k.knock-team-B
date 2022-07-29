<?php
    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "kimyeonwoo";

    

    $DBname = "MEMBER_INFO";
 

    $connect = mysqli_connect($servername, $user, $password, $DBname);

    if (!$connect) {

       die("서버와의 연결 실패! : ".mysqli_connect_error());
    }

    echo "서버와의 연결 성공!";

?>