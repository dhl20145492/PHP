<style>
    *{
        margin:0;
        padding: 0;
    }
    ul,li{
        list-style: none;
    }
    #div1{
        width: 800px;
        height: 1000px;
        margin-left: 50px;
        margin-top: 10px;
    }
</style>

<a href="add.php">添加文章</a>
<div id="div1">
<?php
include "conn.php";
$sql = 'select * from blog';
$query = mysqli_query($link,$sql);

while ($rs = mysqli_fetch_array($query)) {
    ?>
    <h3><a href="#"><?php echo $rs['title']?></a>|<a href="">修改</a>|<a href="#">删除</a></h3>
    <li>时间：<?php echo $rs['time']?></li>&nbsp;&nbsp;<span>作者：XXX</span>
    <p><?php echo $rs['content']?></p><hr>
    <?php
}
?>
</div>
