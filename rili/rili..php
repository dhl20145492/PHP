<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/1/13
 * Time: 10:45
 */
class RiLi{


    public  function  out(){
        echo "<table align='center'>";
        $this->weekList();
        $this->daysList();
        echo "</table>";
    }


    public function weekList(){
        $weeks = array('日','一','二','三','四','五','六');
        
    }
}
?>

