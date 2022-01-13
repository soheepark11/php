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
          $sql = "select * from board where no='{$_GET['no']}'";
          $result = mysqli_query($conn, $sql); 
          $row = mysqli_fetch_array($result);   
    ?>
    <h1>글보기</h1>
    <table>
        <tr>
            <td>제목</td>
            <td><?=$row['title'] ?></td>
        </tr>
        <tr>
            <td>등록일</td>
            <td><?=$row['created'] ?></td>
        </tr>
        <tr>
            <td>글쓴이</td>
            <td><?=$row['writer'] ?></td>
        </tr>
        <tr>
            <td>내용</td>
            <td><?=$row['description'] ?></td>
        </tr>
    </table>
    <form action="process/delete_process.php" method="post">
        <input type="hidden" name="no" value="<?=$_GET['no']?>">
        <input type="submit" value="삭제하기">
    </form>
    <a href="edit.php?no=<?=$_GET['no']?>">수정하기</a>
</body>
</html>