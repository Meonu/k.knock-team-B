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

     $no=$_POST['no'];
     $name=$_POST["rep_name"];
     $content=$_POST["rep_content"];
     $pw=$_POST["rep_pw"];
     $hashedPassword = password_hash($pw, PASSWORD_DEFAULT);
     $date = date('Y-m-d');
     
     $query = "insert into board (name, pw, content, date, post_num)  values ('$name', '$hashedPassword', '$content', '$date', '$no')";
     
     if(mysqli_query($connect,$query))
     {
        ?>
         <script>
         alert("댓글 등록이 완료되었습니다.");
         location.href="./viewpost.php?no=<?php echo $no ?>";
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

?>