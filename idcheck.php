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


    $userid = $_GET["userid"];
    $sql = "SELECT * FROM mem_info where userid='$userid'";
    $result = mysqli_fetch_array(mysqli_query($connect, $sql));
    else if(!$result){
        echo "<span style='color:blue;'>$userid</span> 는 사용 가능한 아이디입니다.";
       ?><p><input type=button value="이 ID 사용" onclick="opener.parent.decide(); window.close();"></p>
        
    <?php
    } else {
        echo "<span style='color:red;'>$userid</span> 는 중복된 아이디입니다.";
        ?><p><input type=button value="다른 ID 사용" onclick="opener.parent.change(); window.close()"></p>
    <?php
    }

















?>