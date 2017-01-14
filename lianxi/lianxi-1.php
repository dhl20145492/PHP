<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/1/12
 * Time: 11:38
 */
//获取当前url地址
$url = $_SERVER['REQUEST_URI'];
$arr = explode('/',$url);
$num = count($arr)-1;
$uri = $arr[$num];
$a="123";
//$b=(int)$a;
//settype($a,'integer');

//echo "$uri";

/*
$str="wohaokun";
$arr=array();
for($i=0;$i<strlen($str);$i++){
    $arr[$i]=$str[$i];
}
var_dump($str);*/
$str='';
$arr=array(12,13,14,15);
for ($i=0;$i<count($arr);$i++){
    $str.=$arr[$i];
}
var_dump($str);


/*echo "<pre>";
var_dump($_SERVER);
echo "</pre>";*/
//echo "<script>alert('我回不去家了啊')</script>";
//header('location:lianxi-2.php');包头跳转
//echo "<script>location='lianxi-2.php?str=$uri'</script>";
?>