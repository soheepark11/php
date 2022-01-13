<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conn = mysqli_connect('localhost','root','1234','nms');
        $sql = "select * from board";
        $result = mysqli_query($conn, $sql);  
        
        session_start();
        if(isset($_SESSION['username'])){
            echo $_SESSION['username']."님 안녕하세요 <button onclick='location.href=\"process/logout_process.php\"'>로그아웃</button>";
        }else {
            echo "<a href='member/login.php'>로그인</a>";
        }
    ?>
    <header>
        <h1>Green공지사항</h1>
        <ul>
            <li><a href="write.php">글쓰기</a></li>
            <li>글보기</li>
        </ul>
    </header>
    <div>
        <table>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>등록자</th>
                <th>날짜</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>{$row['no']}</td>";
                    echo "<td><a href='view.php?no={$row['no']}'>{$row['title']}</a></td>";
                    echo "<td>{$row['writer']}</td>";
                    echo "<td>{$row['created']}</td>";
                    echo "</tr>";
                }
            ?>
        </table>  
    </div>
    <footer>
        <address>copyright (c) 2021 green All rights reserved.</address>
        <h1>Green</h1>
    </footer>
</body>
</html>