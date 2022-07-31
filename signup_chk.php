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


$userid = $_POST["userid"];

$userpw = $_POST["userpw"];
$confirm = $_POST["pwconfirm"];

$name = $_POST["username"];

$userphone = $_POST["userphone"];

$email = $_POST["useremail"];

$sql = "insert into mem_info(userid,userpw,username,userphone,useremail) VALUES($userid,$userpw,$name,$userphone,$email)";

if(strcmp($userpw,$confirm)==0)
{
$result = mysqli_query($connect,$sql);

    if($result === false)
    {
        echo "오류가 발생했습니다.";
    }
    else
    {   
    ?>
        <script>
        alert("회원가입이 완료되었습니다.");
        <a herf = "localhost:6365">홈페이지로 이동</a>
        </script>   
    <?php
    }
}
else
{
    ?>
    <script>
    alert("비밀번호가 일치하지 않습니다.");
    </script>

    <?php
}

?>  