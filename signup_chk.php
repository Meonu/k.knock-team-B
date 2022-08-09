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


$userid = $_POST["decide_id"];

$userpw = $_POST["userpw"];
$confirm = $_POST["pwconfirm"];

$name = $_POST["username"];

$userphone = $_POST["userphone"];

$email = $_POST["useremail"];


$hashedPassword = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$sql = "insert into mem_info(userid,userpw,username,userphone,useremail) VALUES('$userid','$hashedPassword','$name','$userphone','$email')";


    if(mysqli_query($connect,$sql) === false)
    {
        echo "오류가 발생했습니다.";
        return false;
    }
    else
    {   
    ?>
        <script>
        alert("회원가입이 완료되었습니다.");
        </script>   
    <?php
    }

?>  