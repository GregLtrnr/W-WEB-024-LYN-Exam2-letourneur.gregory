<?php
function return_calls($func = null,$arr = null){
    static $i = 0;
    if ($func == null || $arr == null){
        return FALSE;
    }else{
        call_user_func($func,$arr);
        return $i++;
    }
    


  }



