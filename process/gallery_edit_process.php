<?php 
    var_dump($_FILES);
    //파일타입 및 확장자 체크
    $filetypeArr = explode('/',$_FILES['imgsrc']['type']);
    //파일타입
    $filetype = $filetypeArr[0];
    //파일 확장자 
    $fileExt = $filetypeArr[1];
    //확장자 검사
    $fileCheck = false;
    //확장자가 jpg이거나 jpeg이거나 gif이거나 png일때는 
    //fileCheck에 true할당
    if($fileExt == "jpg" || $fileExt == "jpeg" || $fileExt == "gif" || $fileExt == "png"){
        $fileCheck = true;
    }
    //이미지 파일이 맞는지 체크
    if($filetype == "image"){
        //허용된 확장자만 업로드(그외에는 업로드 불가)
        if($fileCheck){
            //임시파일경로 변수에 할당
            $tempFile = $_FILES['imgsrc']['tmp_name'];
            //이미지파일을 저장할 경로지정
            $resFile = "../images/{$_FILES['imgsrc']['name']}";
            //임시파일위치에서 저장할 경로로 파일위치 옮기기
            $imgUpload = move_uploaded_file($tempFile,$resFile);
            if($imgUpload){
                echo "파일이 업로드 되었습니다.";
            }else {
                echo "파일 업로드에 실패했습니다.";
            }
        }
    }
    //update 테이블명 set 컬럼명="변경할값", ... where [조건]
    //update galleryboard 
    //set writer='{$_POST['writer']}', 
    //title='{$_POST['title']}', 
    //description='{$_POST['desc']}',
    //date=NOW(), imgsrc='{$resFile}'
    //where no = {$_POST['no']};
    $conn = mysqli_connect('localhost','root','1234','nms');
    $sqlstr = "update galleryboard 
    set writer='{$_POST['writer']}',
    title='{$_POST['title']}',
    description='{$_POST['desc']}',
    date=NOW(), imgsrc='{$resFile}'
    where no={$_POST['no']}";

    echo $sqlstr;
  
    $result = mysqli_query($conn, $sqlstr);
    if($result){
        echo "업로드 되었습니다.";
        header('Location:../galleryboard/gallery_list.php');
    }else {
        echo "업로드 되지 않았습니다.";
    }
    //insert into galleryboard(imgsrc,writer,title,date,description)
    //values('../images/img1.jpg','writer','title',NOW(),'desc');
?>