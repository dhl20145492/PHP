<?php
  if (!isset($_COOKIE['id'])){

  }

?>


<?php
        include 'conn.php';
        if(isset($_POST['SUB'])){
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $arr = array('$','=','@');
            $flag = ture;
            for($i = 0;$i<strlen($name);$i++){
                for($j = 0;$j<strlen($arr);$j++){
                    if($name[$i] == $arr[$j]){
                        $flag = false;
                    }
                }
            }
            if($flag ==false){
                echo '<script>alert("用户名非法")</script>';
            }else{
                    $sql = "select * from blog where uname = '$name'";
                    $query = mysqli_query($link,$sql);
                    $rs = mysqli_fetch_assoc($query);
                    if($rs) {
                        echo "<script>alert('用户名已存在')</script>";
                    }else{
                        $sql = "insert into user(uid,uname,pass) values(null,'$name','$pass')";
                        $query = mysqli_query($link,$sql);
                        if($query){
                            header('location:login.php');
                        }else{
                            header('location:add.php');
                        }
                    }
            }
        }
echo $sql;

?>
<meta charset="utf-8">
<form action="reg.php" method="post" id="f1">
    用户名：<input type="text" name="name"><br   />
    密码：<input type="password" name="pass" id="p1"><br  />
    重复密码：<input type="password" name="rename" id="rp1"><br   />
    <input type="submit" name="sub" value="注册">
</form>

<script>
    var op1 = document.getElementById('p1');
    var orp1 = document.getElementById('rp1');
    var oF1 = document.getElementById('f1');
    var oNext = orp1.nextSibling;
    orp1.onblur = function () {
        if (op1.value !=orp1.value){
//            alert('两次输入的密码不一致');
            var ospan = document.createElement('span');
            ospan.innerHTML = "密码不一致";
//            orp1.appendChild(ospan);
            oF1.insertBefore(ospan,oNext);
        }
    }
</script>