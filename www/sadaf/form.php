<!DOCTYPE html>

<?php
include "header.inc.php";
//HTMLBegin();
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
        $user = test_input($_REQUEST["user"]);

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

//check for duplicate


//if (!mysql_num_rows($res)){
//echo "not repeat";
// INSERT QUERY
//INSERT INTO Books (title , ISBN , publisher , numberofPage  ,  Author , dates  ,  descriptions , image , files , AccountSpecID)
// VALUES ( $title  , $isbn , $publisher , $page , $author , $date , $desc , $img_path , $file_path , $user);"
//}
//else{
  //  echo "repeated";
//}




// $mysql = pdodb::get->Instance()
// $query = 
// $res = $mysql->Execute($query)


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<html>
  <head>
    <title>New Book Form </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/form.css">
  </head>
  <body>   
    <div class="testbox">
        <form method="post" enctype = "multipart/form-data">
        <div class="banner">
          <h1>New Book Form</h1>
          <img src="./images/bg_img2.jpg" width="1600" height="320">
        </div>
          
        <div class="item">
            <div class="name-item">
                <div>
                    <label for="isbn">ISBN<span>*</span></label>
                    <input id="isbn" type="text" name="isbn"  placeholder="Example : 9780393958041" required >
                </div>
            </div>
        </div>
        <div class="item">
            <label for="title">Title<span>*</span></label>
            <div class="name-item">
                <input id="title" type="text" name="title" placeholder="Example : Alice in wonderland" required>
            </div>
            <label for="publisher">Publisher<span>*</span></label>
            <div class="name-item">
                <input id="publisher" type="text" name="publisher" placeholder="Example : Norton Critical " required >
            </div>
        </div>
        <div class="item">
            <label for="date">Date<span>*</span></label>
            <input id="date" type="date" name="date" required/>
            <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="item">
            <div class="name-item">
                <div>
                    <label for="author"> Author <span>*</span> </label>
                    <input id="author" type="text" name="author" placeholder="Example : Lewis Carroll" required>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="name-item">
                <div>
                    <label for="User-ID"> User-ID <span>*</span> </label>
                    <input id="user" type="number" name="user" placeholder="User-ID : 1" required>
                </div>
            </div>
        </div>
        <div class="item">
            <div class="name-item">
                <div>
                    <label for="Number of Pages"> Number of Pages <span>*</span> </label>
                    <input id="pages" type="number" name="pages" placeholder="Example : 1111" required>
                </div>
            </div>
        </div>
        <div class="item">
          <label for="apply">Description</label>
        <textarea id="desc" rows="3"></textarea>
        </div>
        <div class="item">
          <label for="cv">Upload PDF File<span>*</span></label>
          <input  id="pdf" name = "pdf" type="file" required>
        </div>
        <div class="item">
          <label for="cover">Upload Cover Image<span>*</span></label>
          <input  id="img" name = "img" type="file" required>
        </div>
        <div class="btn-block">
          <button type="submit" >Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>

