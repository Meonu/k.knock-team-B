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
    // 세션에 id 저장
    session_start();
    $_SESSION['userid'] = $row['userid'];
    
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
        alert("아이디 또는 비밀번호가 일치하지 않습니다.");
        location.href = "./loginpage.php";
    </script>
<?php
}
?>