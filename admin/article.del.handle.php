<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-24
 * Time: 下午12:42
 */
header("content-type:text/html;charset=utf8");
require_once('../datebaseConnect.php');
$id = $_GET['id'];
$deletesql = "delete from article where id=$id";
if(mysql_query($deletesql)){
    echo "<script> alert('删除文章成功');window.location.href='article.manage.php';</script>";
}else{
    echo "<script> alert('删除文章失败');window.location.href='article.manage.php';</script>";
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