<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-24
 * Time: 下午2:01
 */
require_once('datebaseConnect.php');
$sql = "select * from introduce";
if($result = mysql_query($sql)){
    $data = mysql_result($result,0,'about');
   # $data= mysql_fetch_assoc($result);
}else{
    echo mysql_error();
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>关于我们</title>
    <link href="default.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
<!-- start header -->
<div id="header">
    <div id="logo">
        <h1><a href="#">php与mysql<sup></sup></a></h1>

        <h2></h2>
    </div>
    <div id="menu">
        <ul>
            <li class="active"><a href="article.list.php">文章</a></li>
            <li><a href="about.php">关于我们</a></li>
            <li><a href="contact.php">联系我们</a></li>
        </ul>
    </div>
</div>
<!-- end header -->
</div>

<!-- start page -->
<div id="page">
    <!-- start content -->
    <div id="content">

        <div class="post">
            <h1 class="title">关于我们</h1>

            <div class="entry">
                <?php echo $data ?>
            </div>

        </div>

    </div>
    <!-- end content -->
    <!-- start sidebar -->
    <div id="sidebar">
        <ul>
            <li id="search">
                <h2><b class="text1">Search</b></h2>

                <form method="post" action="article.search.php">
                    <fieldset>
                        <input type="text" id="s" name="s" value="" placeholder="输入标题或者作者以搜索"/>
                        <input type="submit" id="x" value="Search"/>
                    </fieldset>
                </form>
            </li>
        </ul>
    </div>
    <!-- end sidebar -->
    <div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
    <p id="legal"></p>
</div>
<!-- end footer -->
</body>
</html>