<?php

$connect = new mysqli("localhost","yeonugim","kyw@514514514","MEMBER_INFO");


$userid = $_POST["userid"];
$userpw = $_POST["userpw"];

$idsql = "SELECT * FROM mem_info where userid='$userid'";
$idresult = mysqli_fetch_array(mysqli_query($connect, $idsql));



if (!$connect)
     echo "<h2>서버와의 연결 실패</h2>";
    else if(!$idresult || !$pwresult){
        
        ?>
        <script>
        alert("아이디 또는 비밀번호가 잘못되었습니다.")
        </script>
        <?php
    } 
    else 
    {
        ?>
        <script>
        alert("로그인을 정상적으로 성공하였습니다.")
        location.href = "index.php";
        </script>
        <?php
    }



?>