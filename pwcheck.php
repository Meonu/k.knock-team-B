<?php
$no = $_GET['no'];
$pw = $_POST['pw'];

$connect = new mysqli("localhost","yeonugim","kyw@514514514","MEMBER_INFO");

$sql = "SELECT * FROM mem_info where no='$no'";
$result = mysqli_query($connect, $sql); //id 검증

$row = mysqli_fetch_array($result);
$hashedPassword = $row['password'];


$passwordResult = password_verify($pw, $hashedPassword);

if($passwordResult === false)
{
   ?>
    <script>
        alert("비밀번호가 일치하지 않습니다.");
        window.close();
    </script>
    <?php
    
}
else{
     ?>
    <script>alert("비밀번호가 인증되었습니다.");
    opener.parent.location.href="modify.php?no=<?php echo $no ?>";
    window.close();
    </script>
    <?php
}
?>