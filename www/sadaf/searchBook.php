<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Shiva Radmanesh - Kasra Korminejad - Sahar Sheikholeslami - Ali Nasiri - Mohsen Mahmoud zadeh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./BookReads/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./BookReads/css/index.css"
</head>
<body class="bg-light">
    <div class="container-fluid">
        

        <!-- <div class="row bg-dark header"> -->
        <div class="row bg-dark header">
            <div class="input-group  mb-3 col-3">
            </div>

            <div class="col-6 logo">
                <a href="./firstpage.php" style="color: white; text-decoration: none;">
                Book<b id="logo-bold">Reads</b>
                </a>
            </div>


            <div class="col-2" style="margin-top: auto; margin-bottom: auto;">
                <a class="profile-link">Profile</a>
            </div>

            <div class="col-1"></div>
        </div>


        <div class="row bg-dark" style="text-align: center;">
            <div class="col-4">
                <a href="./mylibrary.php"><b style="color: white;">Profile</b></a>
            </div>

            <div class="col-4">
                <a href="./form.php"><b style="color: white;">Add Book</b></a>
            </div>

            <div class="col-4">
                <a href="./searchBook.php"><b style="color: white;"> Search</b></a>
            </div>
        </div>



        <div id="page-cover" class="row">
            <img src="./BookReads/asset/images/bg_img2.jpg" style="width: 100%;">
        </div>


        <div class="row" style="margin-top: 8vw;">
            <h2 class="h2" style="margin-left: 2vw;">Find book</h2>
            <hr style="width: 90%; display: block;  margin-bottom: 4vw; margin-left: auto; margin-right: auto;">
        </div>


        <?php
            include "header.inc.php";

            $mysql = pdodb::getInstance();
            if (isset($_REQUEST['findByAuthor'])){

                $query = 'SELECT * FROM Books WHERE author="'.$_REQUEST['author'].'"';
                $mysql->Prepare($query);
                $res = $mysql->Execute($query); 

                $title = [];
                $isbn = [];
                $img_path = [];

                $count = 0;
                while($rec = $res->fetch()){
                    $title[$count] = $rec['title'];
                    $isbn[$count] = $rec['ISBN'];
                    $img_path[$count] = $rec['image'];
                    
                    $count++;
                }
            }

            if (isset($_REQUEST['findByTitle'])){
                $query = 'SELECT * FROM Books WHERE title="'.$_REQUEST['title'].'"';
                $mysql->Prepare($query);
                $res = $mysql->Execute($query); 

                $title = [];
                $isbn = [];
                $img_path = [];

                $count = 0;
                while($rec = $res->fetch()){
                    $title[$count] = $rec['title'];
                    $isbn[$count] = $rec['ISBN'];
                    $img_path[$count] = $rec['image'];
                    
                    $count++;
                }
            }


        ?>

        <div class="row">
            <form class="form-inline" style="text-align: center;">
                <div class="form-group mb-2">
                    <p>Search based on name of the authour
                    <label for="staticEmail2" class="sr-only">Find by author's name:</label>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Find by book</label>
                    <input type="text" class="form-control" id="author"  name="author" placeholder="author">
                </div>
                <button type="submit" class="btn btn-success mb-2" name="findByAuthor" id="findByAuthor">Search</button>
            </form>
        </div>


        <div class="row" >
            <form class="form-inline" style="text-align: center;">
                <div class="form-group mb-2">
                    <p>Search based on title
                    <label for="staticEmail2" class="sr-only">Find by author's name:</label>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Find by title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="title">
                </div>
                <button type="submit" class="btn btn-success mb-2" name="findByTitle" id="findByTitle">Search</button>
            </form>
        </div>



        
        <?php
            echo "<hr>";
            for($i = 0; $i < $count; $i++){
                echo "<div class='row'><div class='col-4'><a href=./bookProfile.php?ISBN=".$isbn[$i]." style='text-align: center;'>".$title[$i]."</a></div>";
                echo "<div class='col-4'><img src='".$img_path[$i]."' style='width: 12vw;'></div></div><hr>";
            }
        ?>
        
        
        

    </div> <!-- container div--> 
</body>
</html>
