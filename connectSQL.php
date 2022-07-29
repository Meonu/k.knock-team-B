<?php

    $servername = "52.231.107.199:6365";

    $user = "kimyeonwoo";

    $password = "kyw@514514514";

 

    $connect = mysqli_connect($servername, $user, $password);

    if (!$connect) {

       die("서버와의 연결 실패! : ".mysqli_connect_error());
    }

    echo "서버와의 연결 성공!";

?>