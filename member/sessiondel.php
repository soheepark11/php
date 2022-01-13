<?php 
    session_start();
    unset($_SESSION['session1']);
    unset($_SESSION['session2']);

    if(isset($_SESSION['session1'])){
        $session1 = $_SESSION['session1'];
        echo "session1은 {$session1}입니다.";
    }else {
        echo "session1은 없어요";
    }
    if(isset($_SESSION['session2'])){
        $session2 = $_SESSION['session2'];
        echo "session2은 {$session2}입니다.";
    }else {
        echo "session2은 없어요";
    }
?>