<?php 
    //update 테이블명
    //set 컬럼명 = 값, 컬럼명 = 값
    //where 컬럼명 = 값
    $conn = mysqli_connect('localhost','root','1234','nms');
    $sqlstr = "update board
               set title='{$_POST['title']}', 
               description='{$_POST['desc']}', 
               writer='{$_POST['writer']}', 
               created=NOW()
               where no='{$_POST['no']}'";
    echo $sqlstr;
    $result = mysqli_query($conn, $sqlstr);
    if($result){
        echo "성공";
    }else {
        echo "실패";
    }
    
?>