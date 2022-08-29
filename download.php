<?php $no=htmlentities($_GET['no']);
    //error_reporting(E_ALL); 
    //ini_set("display_errors",1);

    $password = "kyw@514514514";
    
    $servername = "localhost";

    $user = "yeonugim";

    $DBname = "MEMBER_INFO";
 

    $connect = new mysqli($servername, $user, $password, $DBname);

        $query = "SELECT * from board where no = $no";
        $result = $connect -> query($query);
        $rows = mysqli_fetch_assoc($result);


        ?>
        <script>window.location.href='./uploads/<?php echo $rows['filename'];?>';
        history.back()</script>