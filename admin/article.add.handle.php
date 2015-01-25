<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-19
 * Time: 下午9:22
 */
header("Content-Type:text/html; charset=utf-8");
require_once('../datebaseConnect.php');
#die('error');
if (!isset($_POST['title']) || empty($_POST['title'])) {
    echo "<script> alert('标题不能为空');window.location.href='article.add.php';</script>";
} else {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $dateline = time();
    $insertsql = "insert into article(title, author, description, content, dateline) VALUES ('$title', '$author', '$description', '$content', $dateline)";
    if (mysql_query($insertsql)) {
        echo "<script>alert('发布文章成功');window.location.href='article.manage.php';</script>";
    } else {
        echo "<script>alert('发布失败');window.location.href='article.manage.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
</body>
</html>