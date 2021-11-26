<?php
function rev_epur_str($str = null){
    if ($str ===null){
        return false;
    }else{
        $str = trim($str);
        $arr = preg_split('/\s+/',$str);
        $arr = array_reverse($arr);
        return implode(" ",$arr);
    }
}
