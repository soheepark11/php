<?php
    //delete from galleryboard
    //where no = $_POST['no']
    $conn = mysqli_connect('localhost','root','1234','nms');
    $sql = "delete from galleryboard where no = {$_POST['no']}";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "삭제되었습니다.";
        header('Location: ../galleryboard/gallery_list.php');
    }else {
        echo "실패했습니다.";
    }
?>