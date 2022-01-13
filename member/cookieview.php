<?php 
    if(isset($_COOKIE['cookie1'])){
        $cookie1 = $_COOKIE['cookie1'];
        echo "cookie1은 {$cookie1} 이다.";
    }
    if(isset($_COOKIE['cookie2'])){
        $cookie2 = $_COOKIE['cookie2'];
        echo "cookie2은 {$cookie2} 이다.";
    }else {
        echo "cookie2는 타임아웃되었습니다.";
    }
?>