<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Kasra Korminejad - Shiva Radmanesh - Sahar Sheikholeslami - Ali Nasiri - Mohsen Mahmoud zadeh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./BookReads/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./BookReads/css/index.css">
</head>
<body class="bg-light" style="direction: rtl;">
    <div class="container-fluid">
        

        <!-- <div class="row bg-dark header"> -->
        <div class="row bg-dark header">
            <div class="input-group  mb-3 col-3"></div>

            <div class="col-6 logo">
                <a href="./firstpage.php" style="color: white; text-decoration: none;">
                Book<b id="logo-bold">Reads</b>
                </a>
            </div>


            <div class="col-2" style="margin-top: auto; margin-bottom: auto;">
                <!-- <a href="./mylibrary.php" class="profile-link">Profile</a> -->
            </div>

            <div class="col-1"></div>
        </div>

        <div class="row bg-dark" style="text-align: center;">
            <div class="col-4">
<!--                <a href="./mylibrary.php"><b style="color: white;">Profile</b></a>-->
                <a href="./mylibrary.php"><b style="color: white;">پروفایل</b></a>
            </div>

            <div class="col-4">
<!--                <a href="./form.php"><b style="color: white;">Add Book</b></a>-->
                <a href="./form.php"><b style="color: white;">افزودن کتاب</b></a>
            </div>

            <div class="col-4">
<!--                <a href="./searchBook.php"><b style="color: white;"> Search</b></a>-->
                <a href="./searchBook.php"><b style="color: white;">جستجو</b></a>
            </div>
        </div>


        <div id="page-cover" class="row">
            <img src="./BookReads/asset/images/bg_img2.jpg" style="width: 100%;">
        </div>


        <div class="row" style="margin-top: 8vw;">
<!--            <h2 class="h2" style="margin-left: 2vw;">Recommended books</h2>-->
            <h2 class="h2" style="margin-left: 2vw;">کتاب های پیشنهادی</h2>
            <hr style="width: 90%; display: block;  margin-bottom: 4vw; margin-left: auto; margin-right: auto;">
        </div>
        
        <?php
        include "header.inc.php";

        $mysql = pdodb::getInstance();
        $query = "SELECT * FROM Books";
        $res = $mysql->Execute($query);

        $ind = 0;
        while($rec = $res->fetch()){
            
            $html_text = '';

            if ($i == 3){
                $i = 0;
            }

            if($i == 0){
                $html_text = "<div class='row book-row'><div class='col-4 book-container'><img class='rounded book' src='".$rec['image']."'><br><a href='./bookProfile.php?ISBN=".$rec['ISBN']."' class='link-primary text-center book-text'>".$rec['title']."</a></div>";
            }
            else if($i == 1){ 
                $html_text = "<div class='col-4 book-container'><img class='rounded book' src='".$rec['image']."'><br><a href='./bookProfile.php?ISBN=".$rec['ISBN']."' class='link-primary text-center book-text'>".$rec['title']."</a></div>";
            }
            else if($i == 2)
                $html_text = "<div class='col-4 book-container'><img class='rounded book' src='".$rec['image']."'><br><a href='./bookProfile.php?ISBN=".$rec['ISBN']."' class='link-primary text-center book-text'>".$rec['title']."</a></div></div>";
            $i++;

            echo $html_text;
        }

        ?>
    </div> <!-- container div--> 
</body>
</html>