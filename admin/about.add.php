<?php

require_once("../datebaseConnect.php");
if($_GET['mode']=='edit'){
    $about = $_POST['about'];
    $contact = $_POST['contact'];
     $sql= "update int1roduce set about='$about', contact='$contact' where 1=1";
    if(mysql_query($sql)){
        echo "<script> alert('编辑成功');window.location.href='about.add.php';</script>";
    }else{
        #  echo mysql_error();
      echo '<script> alert("'.mysql_error().'");window.location.href="about.add.php";</script>';
    }
}else{
    $sql = "select * from introduce";
    $result = mysql_query($sql);
    $data= mysql_fetch_assoc($result);
    #print_r($data);
}
?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>添加关于我的信息</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .heading {
        height: 110px;
        background-color: lavender;
    }

    .heading p {
        padding: 35px 0 0 20px; /*上右下左*/
        font-size: 20px
    }

    .container {
        width: 100%;
        height: 200px;

    }

    .container .lf {
        float: left;
        width: 160px;
        height: 500px;
        background-color: thistle;
    }

    .container .lf p{
        padding: 20px 0 0 5px;
    }

    .container .rf {
        float: left;
        width: 600px;
    }
    .ask-title{
        text-align: center;
    }
    .footing {
        width: 100%;
        height: 50px;
        background-color: aqua;
    }

</style>
<body>
<div class="heading">
    <p>后台管理系统</p>
</div>
<div class="container">
    <div class="lf">
        <p><a href="article.add.php">发布文章</a></p>
        <p><a href="about.add.php">修改关于我</a></p>
        <p><a href="article.manage.php">文章管理</a></p>

        <p><a href="../article.list.php">返回网站首页</a></p>
    </div>
    <div class="rf">
        <span class="ask-title ">关于我我页面信息</span>
        <form action="about.add.php?mode=edit" method="post">
            <div>
                <label for="contact">联系我</label>
                <textarea name="contact" id="contact" cols="60" rows="5"><?php  if(!empty($data)) {echo $data['contact'];} ?></textarea>
            </div>
            <div>
                <label for="about">关于我</label>
                <textarea name="about" id="about" cols="60" rows="5"><?php  if(!empty($data)){ echo $data['about']; }?></textarea>
            </div>
            <input type="submit" value="提交">
        </form>
    </div>
</div>
<div class="clearfix" style="clear: both"></div>
<div class="footing">版权所有</div>

</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-18
 * Time: 下午10:00
 */