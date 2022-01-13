<?php 
    $conn = mysqli_connect('localhost','root','1234','nms');
    $sqlstr = "select * from galleryboard";
    $result = mysqli_query($conn, $sqlstr);
    
    function showlist(){
        global $result;
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>{$row['no']}</td>";
            echo "<td><img src=\"{$row['imgsrc']}\" width='160'></td>";
            echo "<td><a href='gallery_view.php?no={$row['no']}'>{$row['title']}</a></td>";
            echo "<td>{$row['writer']}</td>";
            echo "<td>{$row['date']}</td>";
            echo "</tr>";
        }
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
        }
        table, td {
            border: 1px solid #ccc;
        }
        td {
            padding: 16px;
        }
        p { text-align: center;}
    </style>
</head>
<body>
    <h1>갤러리 게시판</h1>
    <table>
        <tr>
            <td>번호</td>
            <td>이미지</td>
            <td>제목</td>
            <td>글쓴이</td>
            <td>날짜</td>
        </tr>
        <?php showlist(); ?>
    </table>
    <p>
        <a href="gallery_write.php">글쓰기</a> 
    </p>
</body>
</html>