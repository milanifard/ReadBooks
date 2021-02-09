
<?php
include "header.inc.php";
$userid = $_SESSION["UserID"];
$query = "select * from AccountSpecs where UserID='$userid'";
$mysql = pdodb::getInstance();
$new_res = $mysql->Execute($query);
$newID = $new_res->fetch()['AccountSpecID'];
?>

<!DOCTYPE html>
<html class=>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>کتابخانه من</title>

    <meta content="Mybook" name="description">
    <link rel="stylesheet" href="./css/font.css" media="all">
    <link rel="stylesheet" media="all" href="./css/mylibrary.css">

    <link rel="stylesheet" media="screen,print" href="./css/list.css">
    <link rel="stylesheet" media="print" href="./css/printList.css">


</head>


<body style="direction: rtl;">


<div class="content" style="direction: rtl;">

    <div class="siteHeader" style="direction: rtl;">
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
<!--                                        Home-->
                                        صفحه اصلی
                                    </a>
                                </li>
                                <li class="siteHeader__topLevelItem">
                                    <a href="mylibrary.php" class="siteHeader__topLevelLink">
<!--                                        My Library-->
                                        کتابخانه من
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
        </div>
    </div>
    <div class="siteHeaderBottomSpacer"></div>

    <div class="mainContentContainer " style="direction: rtl;">
        <div class="mainContent ">
            <div class="mainContentFloat ">
                <div id="leadercol">

                    <div id="header" style="float: right;">
                        <h1>
<!--                            <a href="mylibrary.php">My Library</a>-->
                            <a href="mylibrary.php">
                                کتابخانه من
                            </a>
                        </h1>
                    </div>

                    <div id="controls" class="uitext right">
                            <span class="controlGroup uitext">
                                <span class="bookMeta">
                                </span>
                            </span>
                    </div>
                    <div class="clear"></div>
                </div>

                <div id="columnContainer" class="myBooksPage" style="direction: rtl; display: flex; flex-direction: row;">
                    <div id="leftCol" class="col reviewListLeft" style="direction: rtl;">
                        <div id="sidewrapper" >
                            <div id="side">
                                <div id="shelvesSection">
                                    <div class="sectionHeader">
<!--                                        Bookshelves-->
                                        <p style="text-align: right; font-size: 20px;">
                                            قفسه کتاب
                                        </p>

                                    </div>
                                    <div id="paginatedShelfList" class="stacked">
                                        <div class="user_shelf">
<!--                                            <a title="All" class="actionLinkLite" href="mylibrary.php" ">All </a>-->
                                            <a title="All" class="actionLinkLite" href="mylibrary.php">
                                                <p style="text-align: right; margin: 0;">
                                                    همه
                                                </p>
                                            </a>
                                        </div>
                                        <div class="userShelf" style="display: flex; flex-direction: column; margin: 0;">
<!--                                            <a  title="Read" class="actionLinkLite" href="mylibrary.php?state=0"">Read</a>-->
                                            <a  title="Read" class="actionLinkLite" href="mylibrary.php?state=0">
                                                <p style="text-align: right; margin: 0;">
                                                    خوانده شده
                                                </p>
                                            </a>
<!--                                        </div>-->
<!--                                        <div class="userShelf">-->
<!--                                            <a  title="Currently Reading shelf" class="actionLinkLite" href="mylibrary.php?state=1" ">Currently Reading </a>-->
                                            <a  title="Currently Reading shelf" class="actionLinkLite" href="mylibrary.php?state=1" >
                                                <p style="text-align: right; margin: 0;">
                                                    در حال خواندن
                                                </p>
                                            </a>
<!--                                        </div>-->
<!--                                        <div class="userShelf">-->
<!--                                            <a title="Want to Read shelf" class="actionLinkLite" href="mylibrary.php?state=2" >Want to Read</a>-->
                                            <a title="Want to Read shelf" class="actionLinkLite" href="mylibrary.php?state=2">
                                                <p style="text-align: right; margin: 0;">
                                                    برای خواندن
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="stacked">
                                    </div>
                                </div>
                                <div class="horizontalGreyDivider"></div>
                            </div>
                        </div>
                    </div>
                    <div id="rightCol" class="last col">
                        <div class="js-dataTooltip" data-use-wtr-tooltip="true">
                            <table id="books" class="styled-table "  border="1px">
                                <thead>
                                <tr id="booksHeader" >
                                    <th alt="cover" >
<!--                                        <a>ISBN</a>-->
                                        <a>
                                            <p style="text-align: center;">
                                                شابک
                                            </p>
                                        </a>
                                    </th>
                                    <th alt="title" >
<!--                                        <a>Title</a>-->
                                        <p style="text-align: center;">
                                            عنوان
                                        </p>

                                    </th>
                                    <th alt="author">
<!--                                        <a>Author</a>-->
                                        <p style="text-align: center;">
                                            نویسنده
                                        </p>

                                    </th>
                                    <th alt="avg_rating">
<!--                                        <a>NumberOfPages</a>-->
                                        <p style="text-align: center;">
                                            تعداد صفحات
                                        </p>

                                    </th>
                                    <th alt="num_ratings">
<!--                                        <a>Done Pages</a>-->
                                        <p style="text-align: center;">
                                            تعداد صفحات خوانده شده
                                        </p>

                                    </th>
                                    <th alt="rating">
<!--                                        <a>avg rating</a>-->
                                        <p style="text-align: center;">
                                            میانگین امتیاز
                                        </p>

                                    </th>

                                    <th alt="review" >
<!--                                        <a>num ratings</a>-->
                                        <p style="text-align: center;">
                                            تعداد امتیازها
                                        </p>

                                    </th>

                                    <th alt="date_read" >
<!--                                        <a>publisher</a>-->
                                        <p style="text-align: center;">
                                            ناشر
                                        </p>

                                    </th>
                                    <th alt="date_added" >
<!--                                        <a>date</a>-->
                                        <p style="text-align: center;">
                                            تاریخ ثبت
                                        </p>

                                    </th>
                                </tr>
                                <?php
                                if (isset($_REQUEST['state'])){
                                    $query = "select * from Connects ,Books where Connects.ISBN=Books.ISBN and state=".$_REQUEST['state']." and Connects.AccountSpecID=".$newID;
                                }else{
                                    $query = "select * from Connects ,Books where Connects.ISBN=Books.ISBN and Connects.AccountSpecID=".$newID;
                                }

                                $mysql = pdodb::getInstance();
                                $res = $mysql-> Execute($query);
                                while ($rec = $res->fetch())
                                {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo "<a title =";
                                    echo "ISBN class=";
                                    echo "actionLinkLite ";
                                    echo "href=BookProfile.php?ISBN=".$rec['ISBN'].">";
                                    echo $rec['ISBN'];
                                    echo "</a></td>";
                                    echo "<td>".$rec['title']."</td>";
                                    echo "<td>".$rec['author']."</td>";
                                    echo "<td>".$rec['numberofPage']."</td>";
                                    echo "<td>".$rec['donePages']."</td>";

                                    $avg_rating = "SELECT avg(Rating.rating) as avg FROM Books,Rating where Books.ISBN=Rating.ISBN and Rating.ISBN = '".$rec['ISBN']."'";
                                    $avg_res = $mysql->Execute($avg_rating);
                                    $ans_avg = $avg_res->fetch();
                                    echo "<td>".round($ans_avg['avg'],2)."</td>";

                                    $count_rating = "SELECT count(rating.rating) as count FROM Books,Rating where Books.ISBN=rating.ISBN and Rating.ISBN = '".$rec['ISBN']."'";
                                    $count_res = $mysql->Execute($count_rating);
                                    $cnt_avg = $count_res->fetch();
                                    echo "<td>".$cnt_avg['count']."</td>";
                                    echo "<td>".$rec['publisher']."</td>";
                                    echo "<td>".$rec['dates']."</td>";
                                    echo "</tr>";


                                }

                                ?>
                                </thead>
                            </table>
                        </div>
                        <div class="clear"></div>

                    </div>
                    <div class="clear"></div>
                </div>

            </div>


        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>


<div class="clear"></div>

<div style="margin-top: 10px">
    <?php
    $query = "select * from Connects where state=0 and AccountSpecID=1";
    $mysql = pdodb::getInstance();
    $res = $mysql-> Execute($query);
    while ($rec = $res->fetch())
    {
        echo $rec['ISBN'];
    }
    ?>
</div>
</body>
</html>
