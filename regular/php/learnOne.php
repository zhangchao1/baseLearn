<?php
 
 function checkRegular($pattern,$str){

    if(preg_match($pattern,$str)){
        return $str;
    }else{
        return false;
    }
 }

 
 $ip_pattern = "/((2[0-4]\d|25[0-5]|[01]?\d\d?)\.){3}(2[0-4]\d|25[0-5]|[01]?\d\d?)/";
/*
* 2[0-4]\d匹配的是200-249的范围
* 25[0-5]匹配的是200-255的范围
* [01]?\d\d匹配的是0-200的范围 
[01]?匹配 01 0次或者1次
\d\d?匹配前面0次或者1次
*/

$demo_pattern = "/^[01]?\d\d?$/";
var_dump(checkRegular($demo_pattern,"110"));


$tel_pattern = "/^(15[01789]|13[4-9]|18[238])\d{8}$/";
var_dump(checkRegular($tel_pattern,"15022196508"));
/* 按照区段进行区分 */

//设计简单的密码
$pass_pattern = "/^[a-zA-Z0-9]{6,11}$/";
var_dump(checkRegular($pass_pattern,"asc1456"));


$mail_pattern = "/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/";
/*
*[a-zA-Z0-9_-] 非特殊的字符
*/
var_dump(checkRegular($mail_pattern,"zhangchao@pptv.com"));


$script_pattern = "/<script[^>]*?>.*?<\/script>/si";
/*
*?进行懒惰匹配，尽量进行少匹配
s是匹配换行符，i忽略大小写
*/
var_dump(checkRegular($script_pattern,"<Script>>>123</script>"));

