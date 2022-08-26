<?php
error_reporting(E_ALL); 
ini_set("display_errors",1);
$no = $_GET['no'];
$method = $_GET['method'];
$pw = $_POST['pw'];


$connect = new mysqli("localhost","yeonugim","kyw@514514514","MEMBER_INFO");
if(strcmp($method,'modify')==0||strcmp($method,'delete')==0)
{
$sql = "SELECT * FROM board where no=$no";
$result = $connect -> query($sql);
$rows = mysqli_fetch_assoc($result);
$hashedPassword = $rows['password'];
}
else
{
    $sql = "SELECT * FROM reply where no=$no";
    $result = $connect -> query($sql);
    $rows = mysqli_fetch_assoc($result);
    $hashedPassword = $rows['pw'];
}



$passwordResult = password_verify($pw, $hashedPassword);

if($passwordResult === false)
{
   ?>
    <script>
        alert("비밀번호가 일치하지 않습니다.");
    </script>
    <?php
    
}
else{
     ?>
    <script>alert("비밀번호가 인증되었습니다.");</script>
    <?php 
    if(strcmp($method,'modify')==0)
    {   ?>
         <script>
        opener.postmodify();
        window.close();
        </script>
        <?php 
    }
    else if(strcmp($method,'delete')==0)
    {
        ?>
        <script>
            opener.postdelete();
            window.close();
        </script>
        <?php
    }
    else if(strcmp($method,'modreply')==0)
    {
        ?>
        <form action="./modreply.php" method="post">
            <input type="hidden" name="no" value="<?php echo $no?>">
            <input type="submit" value="댓글 수정">
        </form>
        <?php
    }
    else if(strcmp($method,'deletereply')==0)
    {
        ?>
        <form action="./deletereply.php" method="post">
        <input type="hidden" name="no" value="<?php echo $no?>">
            <input type="submit" value="댓글 삭제">
        </form>
        <?php
    }
}
?>