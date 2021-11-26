<?php
function min_len_array($arr = null){
    if($arr == null){
        return false;
    }
    function newsort($a,$b){
        return strlen($a) > strlen($b);
    }
    uksort($arr,"newsort");
    $answerlist = array();
    $vallist = array();
    $i = 1;
    $i2 = 1;
    foreach($arr as $k => $v){
        if ($i == 1){
            $var = strlen($k);
            $i++;
        }
        if (strlen($k)<=$var){
            $answerlist[$k] = $v;
        }
    }if (count($answerlist) == 1){
        $test2 = array_keys($answerlist);
        return $test2[0];
    }else{
        foreach($answerlist as $k => $v){
            if ($i2 == 1){
                $var = strlen($v);
                $i2++;
            }
            if(strlen($v)<=$var){
                $vallist[$k] = $v;
            }
        }if (count($vallist) == 1){
            $test2 = array_keys($vallist);
            return $vallist[$test2[0]];

    }else{
        usort($vallist, function($a, $b) {
            return strlen($b) < strlen($a);
        });
        return $vallist[0];
    }
}
}