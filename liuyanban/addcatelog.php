<?php
include 'conn.php';
if(isset($_POST['sub'])){
    $cname = $_POST['cname'];

    $sql = "select * from catelog where cname ='$cname'";
    $query = mysqli_query($link,$sql);
    $result = mysqli_fetch_array($query);
    if($result){
        echo "<script>alert('当前分类已存在')</script>";
        echo "<script>location ='addcatelog.php'</script>";
    }else{
        $sql = "insert into catelog(cid,cname) values(null,'$cname')";
        $query = mysqli_query($link,$sql);
        if($query){
            echo "<script>location ='add.php'</script>";
        }
    }
}




?>
<meta charset="utf-8">
<form action="addcatelog.php" method="post">
分类名:<input type="text" name='cname' >&nbsp;&nbsp;
    <input type="submit" name="sub" value="增加分类">
</form>
