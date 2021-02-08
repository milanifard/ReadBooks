

<?php
include "header.inc.php";
$query = "select * from Books where Books.ISBN=".$_REQUEST['ISBN'];
$mysql = pdodb::getInstance();
$res = $mysql-> Execute($query);
$ISBN = $res->fetch()['ISBN'];

$userid = $_SESSION['UserID'];
$query = "select * from AccountSpecs where UserID='$userid'";
$mysql = pdodb::getInstance();
$res = $mysql->Execute($query);
$id = $res->fetch()['AccountSpecID'];

$query = "Select * From sadaf.Rating where ISBN=$ISBN and AccountSpecID=$id";
$mysql = pdodb::getInstance();
$res = $mysql->Execute($query);
$rating=  $res->fetch()['rating'];
?>
<?php

if (isset($_POST['write_comment']))
{
    $userid = $_SESSION['UserID'];
    $query = "select * from AccountSpecs where UserID='$userid'";
    $mysql = pdodb::getInstance();
    $res = $mysql->Execute($query);
    $id = $res->fetch()['AccountSpecID'];
    $comment = $_POST['comment'];



    $query = "INSERT INTO sadaf.Comments (ISBN,ID,WAccountSpecID,content) 
                                    VALUES ($ISBN,$id,$id,'$comment')";
    $res = $mysql->Execute($query);


}

?>
<?php
if (isset($_POST['delete_comment']))
{

    $userid = $_SESSION['UserID'];
    $query = "select * from AccountSpecs where UserID='$userid'";
    $mysql = pdodb::getInstance();
    $res = $mysql->Execute($query);
    $id = $res->fetch()['AccountSpecID'];
    $comment = $_POST['comment'];



    $query = "DELETE From sadaf.Comments WHERE Comments.ID = $id and  Comments.ISBN = '$ISBN'";
    $res = $mysql->Execute($query);

}
?>

<?php
$userid = $_SESSION['UserID'];
$query = "select * from AccountSpecs where UserID='$userid'";
$mysql = pdodb::getInstance();
$res = $mysql->Execute($query);
$id = $res->fetch()['AccountSpecID'];

$query = "Select * From sadaf.Connects where ISBN=$ISBN and AccountSpecID=$id";
$mysql = pdodb::getInstance();
$res = $mysql->Execute($query);
$rec=  $res->fetch();
if ($rec){
    if (isset($_POST['book_read']))
    {

        $query = "UPDATE sadaf.Connects
        SET state = 0
        where ISBN=$ISBN and AccountSpecID=$id";
        $res = $mysql->Execute($query);

    }
    if (isset($_POST['cur_read']))
    {
        $query = "UPDATE sadaf.Connects
        SET state = 1
        where ISBN=$ISBN and AccountSpecID=$id";
        $res = $mysql->Execute($query);

    }
    if (isset($_POST['want_read']))
    {
        $query = "UPDATE sadaf.Connects
        SET state = 2
        where ISBN=$ISBN and AccountSpecID=$id";
        $res = $mysql->Execute($query);

    }

}
else{
    if (isset($_POST['book_read']))
    {

        $query = "INSERT INTO sadaf.Connects (AccountSpecID,donePages,state,ISBN)
        VALUE ('$id',0,0,$ISBN)";
        $res = $mysql->Execute($query);

    }
    if (isset($_POST['cur_read']))
    {
        $query = "INSERT INTO sadaf.Connects (AccountSpecID,donePages,state,ISBN)
        VALUE ('$id',0,1,$ISBN)";
        $res = $mysql->Execute($query);

    }
    if (isset($_POST['want_read']))
    {
        $query = "INSERT INTO sadaf.Connects (AccountSpecID,donePages,state,ISBN)
        VALUE ('$id',0,2,$ISBN)";
        $res = $mysql->Execute($query);

    }
}

?>

<?php
if (isset($_POST['rate']))
{

    $rating  =$_POST['rate'];

    $userid = $_SESSION['UserID'];
    $query = "select * from AccountSpecs where UserID='$userid'";
    $mysql = pdodb::getInstance();
    $res = $mysql->Execute($query);
    $id = $res->fetch()['AccountSpecID'];

    $query = "Select * From sadaf.Rating where ISBN=$ISBN and AccountSpecID=$id";
    $mysql = pdodb::getInstance();
    $res = $mysql->Execute($query);
    $rec=  $res->fetch();
    if ($rec){
        $query = "UPDATE sadaf.Rating
        SET rating = $rating
        where ISBN=$ISBN and AccountSpecID=$id";
        $res = $mysql->Execute($query);
    }
    else{

        $query = "INSERT INTO sadaf.Rating (AccountSpecID,rating,ISBN)
        VALUE ('$id',$rating,$ISBN)";
        $res = $mysql->Execute($query);

    }

}
?>
<!DOCTYPE html>
<html class="desktop
">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# good_reads: http://ogp.me/ns/fb/good_reads#">
    <title>
        <?php
        $query = "select * from Books where Books.ISBN=".$_REQUEST['ISBN'];
        $mysql = pdodb::getInstance();
        $res = $mysql-> Execute($query);
        $title = $res->fetch()['title'];
        echo $title;
        ?>
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .checked {
            color: orange;
        }
    </style>

    <link rel="stylesheet" media="all" href="./css/goodreads_all.css" />



    <link rel="stylesheet" media="screen" href="./css/goodreads_screen.css" />

</head>


<body class="">


<div class="content">


    <div class="siteHeader">
        <div >
            <header>
                <div class="siteHeader__topLine  gr-box--withShadow">
                    <div class="siteHeader__contents">
                        <div class="siteHeader__topLevelItem siteHeader__topLevelItem--searchIcon">
                            <button class="gr-iconButton" aria-label="Toggle search" type="button" >

                            </button>
                        </div>
                        <a href="../sadaf/firstpage.php" class="siteHeader__logo" aria-label="Bookreads Home" title="Bookreads Home">
                            <img  src="asset/icon/logo.png" class="siteHeader__logo">
                        </a>
                        <nav class="siteHeader__primaryNavInline">
                            <ul role="menu" class="siteHeader__menuList">
                                <li class="siteHeader__topLevelItem siteHeader__topLevelItem--home">
                                    <a href="../sadaf/firstpage.php" class="siteHeader__topLevelLink" >
                                        Home
                                    </a>
                                </li>
                                <li class="siteHeader__topLevelItem">
                                    <a href="mylibrary.php" class="siteHeader__topLevelLink">
                                        My Library
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>

    <div class='siteHeaderBottomSpacer'></div>



    <div class="mainContentContainer ">




        <div class="mainContent ">


            <div class="mainContentFloat ">

                <div class="leftContainer" itemscope itemtype="http://schema.org/Book">
                    <div id="topcol" class="last col stacked">

                        <div id="imagecol" class="col">
                            <div class="bookCoverContainer">
                                <div class="bookCoverPrimary">
                                    <a rel="nofollow" itemprop="image">
                                        <img id="coverImage" alt="image" src="
                                        <?php
                                        $query = "select * from Books where Books.ISBN=".$_REQUEST['ISBN'];
                                        $mysql = pdodb::getInstance();
                                        $res = $mysql-> Execute($query);
                                        $image = $res->fetch()['image'];
                                        echo $image
                                        ?>" /></a>
                                </div>

                            </div>

                            <div class='wtrButtonContainer' >
                                <div class='wtrUp wtrLeft' >
                                    <form action=<?php echo "bookProfile.php?ISBN=$ISBN";?> method="post">
                                        <button class='wtrToRead'  type='submit' name="book_read" ">
                                        <span class='progressTrigger'>Read</span>
                                        </button>
                                        <button class='wtrToRead'  type='submit' name="cur_read">
                                            <span class='progressTrigger'>Currently Reading</span>
                                        </button>
                                        <button class='wtrToRead' type='submit' name="want_read">
                                            <span class='progressTrigger'>Want to Read</span>
                                        </button>
                                    </form>
                                </div>



                                <script>
                                    function starColor(element){

                                        var stars = ["l1","l2","l3","l4","l5"];
                                        for (i =0  ; i < 5 ; i){

                                            e = document.getElementById(stars[i]);
                                            e.classList.remove("off");
                                            e.classList.add("on");
                                            if (stars[i]===element.id){

                                                i++;
                                                break;
                                            }
                                            i++;
                                        }
                                        for (i ; i<5 ; i++){
                                            e = document.getElementById(stars[i]);
                                            e.classList.remove("on");
                                            e.classList.add("off");
                                        }
                                    }
                                </script>


                                <script>
                                    function post(path, params, method='post') {
                                        // The rest of this code assumes you are not using a library.
                                        // It can be made less wordy if you use one.
                                        const form = document.createElement('form');
                                        form.method = method;
                                        form.action = path;

                                        for (const key in params) {
                                            if (params.hasOwnProperty(key)) {
                                                const hiddenField = document.createElement('input');
                                                hiddenField.type = 'hidden';
                                                hiddenField.name = key;
                                                hiddenField.value = params[key];

                                                form.appendChild(hiddenField);
                                            }
                                        }

                                        document.body.appendChild(form);
                                        form.submit();
                                    }
                                </script>

                                <div class='ratingStars wtrRating' style="margin-left: -40px">
                                    <div class='starsErrorTooltip hidden'>
                                        Error rating book. Refresh and try again.
                                    </div>
                                    <div class='myRating uitext greyText'>Rate this book</div>
                                    <div class='clearRating uitext'>Clear rating</div>
                                    <div class="stars" data-resource-id="12996" data-user-id="129148878" data-submit-url="/review/rate/12996?page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&qid=GSbtI3R7Hp&rank=1&stars_click=true&wtr_button_id=1_book_12996" data-rating="0">
                                        <a class="star off" title="did not like it"  id="l1"
                                           onmouseover="starColor(this)" onclick="post('<?php echo 'BookProfile.php?ISBN='.$ISBN?>',{'rate':1},'post')">
                                            1 of 5 stars
                                        </a>
                                        <a class="star off" title="it was ok" id="l2"
                                           onmouseover="starColor(this)" onclick="post('<?php echo 'BookProfile.php?ISBN='.$ISBN?>',{'rate':2},'post')">
                                            2 of 5 stars
                                        </a>
                                        <a class="star off" title="liked it" id="l3"
                                           onmouseover="starColor(this)" onclick="post('<?php echo 'BookProfile.php?ISBN='.$ISBN?>',{'rate':3},'post')">
                                            3 of 5 stars
                                        </a>
                                        <a class="star off" title="really liked it" id="l4"
                                           onmouseover="starColor(this)" onclick="post('<?php echo 'BookProfile.php?ISBN='.$ISBN?>',{'rate':4},'post')">
                                            4 of 5 stars
                                        </a>
                                        <a class="star off" title="it was amazing" id="l5"
                                           onmouseover="starColor(this)" onclick="post('<?php echo 'BookProfile.php?ISBN='.$ISBN?>',{'rate':5},'post')">
                                            5 of 5 stars
                                        </a>
                                    </div>
                                </div>


                                <script>
                                    function initStars(value){
                                        var stars = ["l1","l2","l3","l4","l5"];
                                        for (i=0 ; i<value ; i++){
                                            e = document.getElementById(stars[i]);
                                            e.classList.remove("off");
                                            e.classList.add("on");
                                        }
                                    }
                                </script>
                                <?php echo  "<script> initStars($rating); </script>";?>
                            </div>




                        </div>

                        <div id="metacol" class="last col">
                            <h1 id="bookTitle" class="gr-h1 gr-h1--serif" itemprop="name">
                                <?php echo $title?>
                            </h1>
                            <h2 id="bookSeries">
                            </h2>

                            <div id="bookAuthors" class="">
                                <span class='by'>
                                    by
                                </span>
                                <span itemprop='author' itemscope='' >
                                    <div class='authorName__container'>
                                        <a class="authorName" itemprop="url"">
                                            <span itemprop="name">
                                                <?php
                                                $query = "select * from Books where Books.ISBN=".$_REQUEST['ISBN'];
                                                $mysql = pdodb::getInstance();
                                                $res = $mysql-> Execute($query);
                                                $author = $res->fetch()['author'];
                                                echo $author;
                                                ?>
                                            </span>
                                        </a>
                                    </div>
                                </span>
                            </div>

                            <div id="bookMeta"
                                 class="uitext stacked"
                                 style="position: relative"
                                 itemprop="aggregateRating"
                                 itemscope
                                 itemtype="https://schema.org/AggregateRating">


                                Rating:
                                <span itemprop="ratingValue"><?php
                                    $avg_rating = "SELECT avg(Rating.rating) as avg FROM Books,Rating where Books.ISBN=Rating.ISBN and Rating.ISBN = ".$_REQUEST['ISBN'];
                                    $avg_res = $mysql->Execute($avg_rating);
                                    $ans_avg = $avg_res->fetch();
                                    echo round($ans_avg['avg'],2);
                                    ?>
                                </span>
                                <br>
                                Number of reviews:
                                <span itemprop="ratingValue"><?php
                                    $cnt_rating = "SELECT count(Rating.rating) as cnt FROM Books,Rating where Books.ISBN=Rating.ISBN and Rating.ISBN = ".$_REQUEST['ISBN'];
                                    $cnt_res = $mysql->Execute($cnt_rating);
                                    $ans_cnt = $cnt_res->fetch();
                                    echo $ans_cnt['cnt'];
                                    ?>
                                </span>

                            </div>

                            <div id="descriptionContainer">

                                <div id="description" class="readable stacked" style="right:0">

                                    <span id="freeTextContainer16394401686507852407">
                                        <?php
                                        $query = "select * from Books where Books.ISBN=".$_REQUEST['ISBN'];
                                        $mysql = pdodb::getInstance();
                                        $res = $mysql-> Execute($query);
                                        $desc = $res->fetch()['descriptions'];
                                        echo $desc;
                                        ?>
                                    </span>


                                </div>
                            </div>




                            <div id="details" class="uitext darkGreyText">
                                <div class="row">

                                    <span itemprop="numberOfPages">

                                        <?php
                                        $query = "select * from Comments ,Books where Comments.ISBN=Books.ISBN and Books.ISBN=".$_REQUEST['ISBN'];
                                        $mysql = pdodb::getInstance();
                                        $res = $mysql-> Execute($query);
                                        echo $res->fetch()['numberofPage'];
                                        ?> pages
                                    </span>
                                </div>

                                <div class="row">
                                    Published
                                    by
                                    <?php
                                    $query = "select * from Comments ,Books where Comments.ISBN=Books.ISBN and Books.ISBN=".$_REQUEST['ISBN'];
                                    $mysql = pdodb::getInstance();
                                    $res = $mysql-> Execute($query);
                                    echo $res->fetch()['publisher'];
                                    ?> pages

                                </div>

                                <div class="buttons">


                                    <div id="bookDataBox" class="uitext" style=" margin: 10px 0">

                                        <div class="clearFloats">
                                            <div class="infoBoxRowTitle">ISBN</div>
                                            <div class="infoBoxRowItem">
                                                <?php
                                                $query = "select * from Books where Books.ISBN=".$_REQUEST['ISBN'];
                                                $mysql = pdodb::getInstance();
                                                $res = $mysql-> Execute($query);

                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div>
                                    Comments:
                                    <div class='horizontalGreyDivider' style='border-bottom:1px solid #D8D8D8;margin:0.5em 0'></div>
                                </div>



                                <?php
                                $query = "select * from Comments  where Comments.ISBN =".$_REQUEST['ISBN'];
                                $mysql = pdodb::getInstance();
                                $res = $mysql-> Execute($query);

                                while($rec = $res->fetch()){
                                    echo "<table>";
                                    echo "<tr>";
                                    echo "<td>";

                                    $userid = $rec['ID'];
                                    $query = "select * from AccountSpecs where AccountSpecID=$userid";
                                    $mysql = pdodb::getInstance();
                                    $new_res = $mysql->Execute($query);
                                    $newID = $new_res->fetch()['UserID'];

                                    echo "Commented by: ".$newID;

                                    echo "</td>";
                                    echo "</tr>";

                                    echo"<tr>";
                                    echo "<td>";
                                    echo "Comment: ".$rec['content'];
                                    echo "</td>";

                                    if($newID== $_SESSION["UserID"]){
                                        echo "<td style='padding-left: 100px'>";
                                        echo "<form action='BookProfile.php?ISBN=$ISBN' method='post'>
                                        <input type='submit' value='Delete Comment' name='delete_comment'>
                                        </form>";
                                        echo "</td>";
                                    }

                                    echo "</tr>";
                                    echo "</table>";
                                    echo "<div style='border-bottom:1px solid #D8D8D8;margin:0.5em 0'></div>";
                                }
                                ?>
                                <div>
                                    Add comments:<br>
                                    <?php
                                    $userid = $_SESSION['UserID'];
                                    $query = "select * from AccountSpecs,Comments where AccountSpecs.AccountSpecID=Comments.ID  
                                      and AccountSpecs.UserID='$userid'  and Comments.ISBN=$ISBN ";
                                    $mysql = pdodb::getInstance();
                                    $res = $mysql->Execute($query);
                                    if ($res->fetch()) {
                                        echo "You have Send your comment";
                                    }
                                    else{
                                        echo "<form action='BookProfile.php?ISBN=$ISBN' method='post'>
                                        <input type='text' id='comment' name='comment' style='width: 300px; height: 100px'>
                                        <input type='submit' value='Send' name='write_comment'>
                                        </form>";
                                    }

                                    ?>
                                </div>

                            </div>

                        </div>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>

                    <div id='lazy_loadable_view'>

                    </div>
                </div>

                <div class="rightContainer">
                </div>

                <span id="rating_graph" class="rating_graph">

  </span>



            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>




    <div class="clear"></div>


</div>


</body>
</html>
