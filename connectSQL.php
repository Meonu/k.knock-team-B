<?php

    $servername = "localhost";

    $user = "choi";

    $password = "0219";

 

    $connect = mysqli_connect($servername, $user, $password);

    if (!$connect) {

       die("서버와의 연결 실패! : ".mysqli_connect_error());
    }

    echo "서버와의 연결 성공!";

?>