<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-19
 * Time: 下午9:22
 */

header("Content-Type:text/html; charset=utf-8");
require_once('../datebaseConnect.php');
if(!isset($_POST['title']) && !empty($_POST['title'])){
echo "<script> alert('标题不能为空');window.location.href='article.add.php';</script>";
    die();
}
$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$description = $_POST['description'];
$content = $_POST['content'];
$dateline =time();
$updatesql = "update article set title='$title',author='$author',description='$description',content='$content',dateline=$dateline where id=$id";

if(mysql_query($updatesql)){
   echo "<script>alert('修改文章成功');window.location.href='article.manage.php';</script>";
}else{
    echo "<script>alert('修改失败');window.location.href='article.manage.php';</script>";
    echo mysql_error();
}?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
</body>
</html>