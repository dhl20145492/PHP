<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/12/16
 * Time: 14:52
 */

include "conn.php";
if(isset($_post['sub'])){
    $title = $_post['title'];
    $con = $_post['con'];
    //insert delete update select

    //1：拼写字符串
    $sql = "insert into blog(bid,title,content,time) values(null,'$title','$con',now())";
    //2:string发送给数据库 string->resource
    $query = mysqli_query($link,$sql);
    if(!$query){
        echo "<script>alert('插入数据库成功')</script>>";
        echo "<script>location = 'index.php'</script>";
    }else{
        echo "<script>alert('插入数据库失败')</script>>";
        header('location:add.php');
    }
}
?>
<meta charset = "utf-8">;
<form action="add.php" method="post">
    标题：<input type="text" name="title"><br />
    内容：<textarea cols="20" rows="10" name="con"></textarea><br />
    <input type="submit" name = 'sub' value="添加">
</form>