<!DOCTYPE html>

<?php
include "header.inc.php";
//HTMLBegin();

$userid = $_SESSION["UserID"];
$query = "select * from AccountSpecs where UserID='$userid'";
$mysql = pdodb::getInstance();
$res = $mysql->Execute($query);
$accountSpecID = $res->fetch()['AccountSpecID'];
?>


<?php

// $servername = "localhost";
// $username = "user1";
// $password = "user1";
// $dbname = "sadaf";

$isbn = $title = $author = $page = $publisher = $date= $pdf = $imge = $desc = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = test_input($_REQUEST["title"]);
        $isbn = test_input($_REQUEST["isbn"]);
        $publisher = test_input($_REQUEST["publisher"]);
        $page = test_input($_REQUEST["pages"]);
        $author = test_input($_REQUEST["author"]);
        $date = test_input($_REQUEST["date"]);
        $desc = test_input($_REQUEST["desc"]);
        $user = $accountSpecID;

    if(isset($_FILES['pdf']) && $_FILES['pdf']['name'] != ""){
        $pdf_content = file_get_contents($_FILES["pdf"]["tmp_name"]);
        $pdf_name = $_FILES["pdf"]["name"];
        move_uploaded_file($_FILES["pdf"]["tmp_name"], "UploadFile/pdf/".$pdf_name);
        $file_path = "./UploadFile/pdf/".$pdf_name;
        //echo "upload";
    }

    if(isset($_FILES['img']) && $_FILES['img']['name'] != ""){
        $img_content = file_get_contents($_FILES["img"]["tmp_name"]);
        $img_name = $_FILES["img"]["name"];
        move_uploaded_file($_FILES["img"]["tmp_name"], "UploadFile/img/".$img_name);
        $img_path = "./UploadFile/img/".$img_name;
        //echo "upload2";
    }
    $query = "SELECT * FROM  Books  WHERE ISBN="."'$isbn'" ;

    $mysql = pdodb::getInstance();
    $res = $mysql->Execute($query);
    if (mysqli_num_rows($res)==0){
        $query = "INSERT INTO Books (title , ISBN , publisher , numberofPage  ,  Author , dates  ,  descriptions , image , files , AccountSpecID)
                    VALUES ( '$title'  , '$isbn' , '$publisher' , $page , '$author' , '$date' , '$desc' , '$img_path' , '$file_path' , $user)";
        $res = $mysql->Execute($query);
    }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<html>
  <head>
    <title>فرم کتاب جدید</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/form.css">
  </head>
  <body style="direction: rtl;">
    <div class="testbox">
        <form method="post" enctype = "multipart/form-data">
        <div class="banner">
<!--          <h1>New Book Form</h1>-->
            <h1>فرم کتاب جدید</h1>
          <img src="./images/bg_img2.jpg" width="1600" height="320">
        </div>
          
        <div class="item">
            <div class="name-item" >
                <div>
<!--                    <label for="isbn">ISBN<span>*</span></label>-->
                    <label for="isbn">شابک<span>*</span></label>
<!--                    <input id="isbn" type="text" name="isbn"  placeholder="Example : 9780393958041" required >-->
                    <input id="isbn" type="text" name="isbn"  placeholder="مثال: 9780393958041" required >
                </div>
            </div>
        </div>
        <div class="item">
<!--            <label for="title">Title<span>*</span></label>-->
            <label for="title">عنوان<span>*</span></label>
            <div class="name-item" style="width: 100%;">
<!--                <input id="title" type="text" name="title" placeholder="Example : Alice in wonderland" required>-->
                <input id="title" type="text" name="title" maxlength="1000" placeholder="مثال: آلیس در سرزمین عجایب" required>
            </div>
        </div>

        <div class="item">
<!--            <label for="publisher">Publisher<span>*</span></label>-->
            <label for="publisher">ناشر<span>*</span></label>
            <div class="name-item" style="width: 100%;">
<!--                <input id="publisher" type="text" name="publisher" placeholder="Example : Norton Critical " required >-->
                <input id="publisher" type="text" name="publisher" placeholder="مثال: Macmillan" required >
            </div>
        </div>
        <div class="item">
<!--            <label for="date">Date<span>*</span></label>-->
            <label for="date"> تاریخ ثبت<span>*</span></label>
            <input id="date" type="date" name="date" required/>
            <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
            <div class="name-item">
                <div>
<!--                    <label for="author"> Author <span>*</span> </label>-->
                    <label for="author"> نویسنده <span>*</span> </label>
<!--                    <input id="author" type="text" name="author" placeholder="Example : Lewis Carroll" required>-->
                    <input id="author" type="text" name="author" placeholder="مثال: لوئیس کارول" required>
                </div>
            </div>
        </div>
        
        <div class="item">
            <div class="name-item">
                <div>
<!--                    <label for="Number of Pages"> Number of Pages <span>*</span> </label>-->
                    <label for="Number of Pages"> تعداد صفحات <span>*</span> </label>
<!--                    <input id="pages" type="number" name="pages" placeholder="Example : 1111" required>-->
                    <input id="pages" type="number" name="pages" placeholder="مثال: 1111" required>
                </div>
            </div>
        </div>
        <div class="item">
<!--          <label for="apply">Description</label>-->
            <label for="apply">توضیحات</label>
        <textarea id="desc" rows="3"></textarea>
        </div>
        <div class="item">
<!--          <label for="cv">Upload PDF File<span>*</span></label>-->
            <label for="cv">آپلود فایل PDF<span>*</span></label>
          <input  id="pdf" name = "pdf" type="file" required>
        </div>
        <div class="item">
<!--          <label for="cover">Upload Cover Image<span>*</span></label>-->
            <label for="cover">آپلود تصویر جلد کتاب<span>*</span></label>
          <input  id="img" name = "img" type="file" required>
        </div>
        <div class="btn-block">
<!--          <button type="submit" >Submit</button>-->
            <button type="submit" >ارسال</button>
        </div>
      </form>
    </div>
  </body>
</html>

