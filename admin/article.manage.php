<?php
require_once('../datebaseConnect.php');
$sql ="select * from article order by dateline desc";
$result = mysql_query($sql);
if($result && mysql_num_rows($result)){
 while($row =mysql_fetch_assoc($result))  {
     $data[] = $row;
 }
}else{
    $data = array();
}
#print_r($data);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
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
        <span class="ask-title ">文章列表管理</span>
        <table width="100%" height="100%" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000">
        <tr>
            <td width="37" bgcolor="#FFFFFF">编号</td>
            <td width="572" bgcolor="#FFFFFF">标题</td>
            <td width="82" bgcolor="#FFFFFF">操作</td>
        </tr>
        <?php
        if(!empty($data)){
            foreach($data as $value){
                ?>
                <tr>
                    <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['id']?></td>
                    <td bgcolor="#FFFFFF">&nbsp;<?php echo $value['title']?></td>
                    <td bgcolor="#FFFFFF"><a href="article.del.handle.php?id=<?php echo $value['id']?>">删除</a> <a href="article.modify.php?id=<?php echo $value['id']?>">修改</a></td>
                </tr>
            <?php
            }
        }
        ?>
            </table>
    </div>
</div>
<div class="clearfix" style="clear: both"></div>
<div class="footing">版权所有</div>
</body>
</html>