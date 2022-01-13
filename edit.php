<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>수정하기</h1>
    <table>
        <?php
            echo $_GET['no'];
            $conn = mysqli_connect('localhost','root','1234','nms');
            $sqlstr = "select * from board where no={$_GET['no']}";
            $result = mysqli_query($conn, $sqlstr);
            $row = mysqli_fetch_array($result);
        ?>
        <form action="process/update_process.php" method="post">
            <input type="hidden" name="no" value="<?=$_GET['no']?>">
            <tr>
                <td>제목</td>
                <td><input type="text" name="title" value="<?=$row['title']?>"></td>
            </tr>
            <tr>
                <td>글쓴이</td>
                <td><input type="text" name="writer"  value="<?=$row['writer']?>"></td>
            </tr>
            <tr>
                <td>내용</td>
                <td>
                    <textarea name="desc" id="desc" cols="60" rows="10">
                     <?=$row['description']?>
                    </textarea>
                </td>
            </tr>
            <tr>
                <td conspan="2">
                    <input type="submit" value="수정">
                    <input type="reset" value="취소">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>