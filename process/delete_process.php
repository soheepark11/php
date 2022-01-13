<?php 
    // delete from 테이블명
    // where 필드이름 = 값
    $no = $_POST['no'];
    echo $no;
     $conn = mysqli_connect('localhost','root','1234','nms');
     $sqlstr =   "delete from board
                 where no={$no}";
     $result = mysqli_query($conn, $sqlstr);
             
    //리다이렉션
    header('Location: ../index.php');
?>
