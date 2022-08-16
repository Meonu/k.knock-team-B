<?php

$connect = new mysqli("localhost","yeonugim","kyw@514514514","MEMBER_INFO");


$userid = $_POST["userid"];
$userpw = $_POST["userpw"];

$idsql = "SELECT * FROM mem_info where userid='$userid'";
$idresult = mysqli_query($connect, $idsql); //id 검증

$row = mysqli_fetch_array($idresult);
$hashedPassword = $row['userpw'];


$passwordResult = password_verify($userpw, $hashedPassword);

if ($passwordResult === true) {
    // 로그인 성공
    // 세션에 id 저장
    session_start();
    $_SESSION['userId'] = $row['userid'];
    print_r($_SESSION);
    echo $_SESSION['userId'];
    
?>
    <script>
        alert("로그인에 성공하였습니다.")
        location.href = "../index.php";
    </script>
<?php
} else {
    // 로그인 실패 
?>
    <script>
        alert("로그인에 실패하였습니다");
        location.herf = "./loginpage.html";
    </script>
<?php
}
?>