<?php

function resum_join_str($str1 = null,$str2=null){
    if($str1 ===null || $str2 == null){
        return false;
    }
    if(strlen($str1) <14){
        $var = 14 - strlen($str1);
        for($i = 0; $i<$var;$i++){
            $str1.=".";
        }
    }
    if(strlen($str2) <3){
        $var = 3 - strlen($str2);
        for($i = 0; $i<$var;$i++){
            $str2.=".";
        }
    }
    $partA = substr($str1,0,14);
    $partB = substr($str2,strlen($str2)-3,3);
    $result = $partA.$partB;

    return $result;

}