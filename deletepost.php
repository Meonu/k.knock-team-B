<?php error_reporting(E_ALL); 
ini_set("display_errors",1);
$no = $_GET['no'];
$password = "kyw@514514514";

$servername = "localhost";

$user = "yeonugim";

$DBname = "MEMBER_INFO";


$connect = new mysqli($servername, $user, $password, $DBname);

if (!$connect)
 echo "<h2>서버와의 연결 실패</h2>";

 $query = "delete from board where no = $no";



if(mysqli_query($connect,$query))
{
    ?>
    <script>
    alert("삭제가 완료되었습니다.");
    location.href = "./index.php";
    </script>
    <?php
}
?>