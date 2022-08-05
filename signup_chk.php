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

function loginchk(){
    if($_POST["decide_id"] == '')
    {
        ?>
        <script>
            alert("아이디를 입력하세요.");
        </script>
        <?php
        return 0;

    }
    else if($_POST["userpw"] == '')
    {
        ?>
        <script>
            alert("비밀번호를 입력하세요.");
        </script>
        <?php
        return 0;
    }
    else if($_POST["username"] == '')
    {
        ?>
        <script>
            alert("이름을 입력하세요.");
        </script>
        <?php
        return 0;
    }
    else if($_POST["userphone"] == '')
    {
        ?>
        <script>
            alert("전화번호를 입력하세요.");
        </script>
        <?php
        return 0;
    }
    else if(strcmp($_POST["userpw"],$_POST["pwconfirm"])==0)
    {
        ?>
        <script>
            alert("비밀번호가 일치하지 않습니다.");
        </script>
        <?php
        return 0;
    }
    else return 1;
}

$sql = "insert into mem_info(userid,userpw,username,userphone,useremail) VALUES('$userid','$userpw','$name','$userphone','$email')";

if(loginchk() != 0)
{
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
}

?>  