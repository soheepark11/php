<?php 
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $writer = $_POST['writer'];
    $conn = mysqli_connect('localhost','root','1234','nms');
    $sqlstr = "insert into board(title,description,writer,created)
    values('{$title}','{$desc}','{$writer}',NOW())";
    $result = mysqli_query($conn, $sqlstr);
    if($result){
        echo '성공';
    }else {
        echo '실패';
    }
?>