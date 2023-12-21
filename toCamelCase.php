<?php
    function toCamelCase($str){
        return preg_replace_callback("~[_-](\w)~", function($m) { return strtoupper($m[1]); }, $str);
    }
    # case 2
    /*
    function toCamelCase($str){
        $str = preg_replace("/[-_]/i","-",$str);
        $words = explode("-",$str);
        for($i = 1; $i < count($words);$i++) {
          $words[$i] = ucfirst($words[$i]);
        }
        return implode("",$words);
    }
    */
?>