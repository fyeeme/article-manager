<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-24
 * Time: 下午1:54
 */

require_once('datebaseConnect.php');
$key = $_POST['s'];


$sql = "select * from article where title like '$key%' or author like '$key%' order by dateline desc";
$query = mysql_query($sql);
if ($query && mysql_num_rows($query)) {
    while ($row = mysql_fetch_assoc($query)) {
        $data[] = $row;
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <title>文章发布系统</title>
    <link href="default.css" rel="stylesheet" type="text/css"/>
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
</div>
<!-- end header -->

<div id="page">
    <div id="content">
        <?php
        if (empty($data)) {
            echo "当前没有文章，请联系管理员在后台添加";
        } else {
            foreach ($data as $value) {
                ?>
                <div class="post">
                    <h1 class="title"><?php echo $value['title'];?>
                        <span style="clor:#ccc;font-size: 14px;">作者： <?php echo $value['author'];?></span>
                    </h1>

                    <div class="entry">
                        <?php echo $value['description'];?>
                    </div>
                    <div class="meta">
                        <p class="links">
                            <a href="article.show.php?id=<?php echo $value['id'];?>" class="more">查看详细</a>

                        </p>
                    </div>
                </div>
            <?php
            }
        }
        ?>

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
                        <input type="submit" id="x" value="Search" />
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