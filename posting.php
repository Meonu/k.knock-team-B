<?php
//error_reporting(E_ALL); 
//ini_set("display_errors",1);

$password = "kyw@514514514";

$servername = "localhost";

$user = "yeonugim";

$DBname = "MEMBER_INFO";


$connect = new mysqli($servername, $user, $password, $DBname);

if (!$connect)
 echo "<h2>서버와의 연결 실패</h2>";

$name=htmlentities($_POST["name"]);
$title=htmlentities($_POST["title"]);
$content=htmlentities($_POST["content"]);
$pw=$_POST["pw"];
$hashedPassword = password_hash($pw, PASSWORD_DEFAULT);
$date = date('Y-m-d');


$tmpfile =  htmlentities($_FILES['addfile']['tmp_name']);
$o_name = $_FILES['addfile']['name'];
$folder = "upload/".$o_name;

$filename = iconv("UTF-8", "EUC-KR",$_FILES['addfile']['name']);

$ext = explode(".", strtolower($filename));

 $cnt = count($ext)-1;
 if($ext[$cnt] === ""){
   if(preg_match("/php|php3|phar|php4|htm|inc|html/", $ext[$cnt-1])){
           echo "업로드할 수 없는 파일 유형입니다.";
       exit();
   }
 } else if(preg_match("/php|php3|phar|php4|htm|inc|html/", $ext[$cnt])){
         echo "업로드할 수 없는 파일 유형입니다.";
            exit();
         

         

 } 
 else {
$upload = move_uploaded_file($tmpfile, "./uploads/$o_name");
 }

$query = "insert into board (name, password, title, content, date, filename)  values ('a', '$hashedPassword', '$title', '$content', '$date', '$o_name')";

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

