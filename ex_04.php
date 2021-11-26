<?php
function return_calls($func,$arr){
    static $i = 0;
  if(!call_user_func($func,$arr)){
      return FALSE;
      return $i++;
  }else{
    return $i++;
  }
}
