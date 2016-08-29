<?php
/**
 * Created by PhpStorm.
 * User: Jaxlying
 * Date: 2016/8/28
 * Time: 14:36
 */
function buildRandomString($type = 1,$length = 4){
    if($type == 1){
        $str = join('',range(0,9));
    }elseif ($type == 2){
        $str = join('',array_merge(range('a','z'),range('A','Z')));
    }elseif ($type == 3){
        $str = join('',array_merge(range(0,9),range('a','z'),range('A','Z')));
    }
    $str = str_shuffle($str);
    return substr($str,0,$length);
}