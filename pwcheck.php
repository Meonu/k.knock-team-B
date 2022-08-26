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
}
else
{
    $sql = "SELECT * FROM reply where no=$no";
$result = $connect -> query($sql);
}
$rows = mysqli_fetch_assoc($result);


$hashedPassword = $rows['password'];


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
        <script>
        var form = document.createElement('form'); // 폼객체 생성
        var objs;
        objs = document.createElement('input'); // 값이 들어있는 녀석의 형식
        objs.setAttribute('type', 'hidden'); // 값이 들어있는 녀석의 type
        objs.setAttribute('name', 'no'); // 객체이름
        objs.setAttribute('value', <?php echo $no?>); //객체값
        form.appendChild(objs);
        form.setAttribute('method', 'post'); //get,post 가능
        form.setAttribute('action', "./modreply.php"); //보내는 url
        document.body.appendChild(form);
        form.submit();
        </script>
        <?php
    }
}
?>