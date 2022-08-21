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

$name=$_POST["name"];
$title=$_POST["title"];
$content=$_POST["content"];
$pw=$_POST["pw"];
$hashedPassword = password_hash($pw, PASSWORD_DEFAULT);
$date = date('Y-m-d');

$query = "insert into board (name, password, title, content, date)  values ('$name', '$hashedPassword', '$title', '$content', '$date')";

if(mysqli_query($connect,$query))
{
   ?>
    <script>
    alert("게시글 등록이 완료되었습니다.");
    location.href="./index.php";
    </script>
    <?php
}
else
{
    ?>
    <script>
    alert("데이터베이스 연동을 실패하였습니다.");
    </script>
    <?php
}

?>

