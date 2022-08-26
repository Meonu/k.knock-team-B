<?php
    $no=$_GET['no'];

    error_reporting(E_ALL); 
    ini_set("display_errors",1);

    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

    if (!$connect)
     echo "<h2>서버와의 연결 실패</h2>";

     $sql = mysqli_query($connect,"select * from reply where no ='$no'");
     $reply = $sql -> fetch_array();
?>
     <form action="./modreply_ok.php" method="post">
     <p>
     <input type="text" name="rep_name" size="15" placeholder="아이디" value="<?php echo $reply['name']?>" disabled='true'>
     </p>
     <p><textarea name="rep_content" rows="8" cols="70" reqired><?php echo $reply['name']?></textarea></p>
     <input type="hidden" name="no" value="<?php echo $no?>">
     <input type="submit" value="댓글 수정">

 </form>
