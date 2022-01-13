<?php 
   

    //파일타입 및 확장자 체크
    $filetypeArr = explode('/',$_FILES['fileimg']['type']);
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
            $tempFile = $_FILES['fileimg']['tmp_name'];
            //이미지파일을 저장할 경로지정
            $resFile = "../images/{$_FILES['fileimg']['name']}";
            //임시파일위치에서 저장할 경로로 파일위치 옮기기
            $imgUpload = move_uploaded_file($tempFile,$resFile);
            if($imgUpload){
                echo "파일이 업로드 되었습니다.";
            }else {
                echo "파일 업로드에 실패했습니다.";
            }
        }
    }
    $conn = mysqli_connect('localhost','root','1234','nms');
    $sqlstr = "insert into galleryboard(imgsrc,writer,title,date,description)
    values('{$resFile}','{$_POST['writer']}','{$_POST['title']}',NOW(),'{$_POST['desc']}')";
  
    $result = mysqli_query($conn, $sqlstr);
    if($result){
        echo "업로드 되었습니다.";
    }else {
        echo "업로드 되지 않았습니다.";
    }
    //insert into galleryboard(imgsrc,writer,title,date,description)
    //values('../images/img1.jpg','writer','title',NOW(),'desc');
?>