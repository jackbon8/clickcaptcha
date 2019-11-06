<?php

ini_set("display_errors", "On");//打开错误提示
require('../clicaptcha.php');
$clicaptcha = new Clicaptcha();
if(empty($_POST))
{  
    $textArr = require('../config.php');
    $textArr = $textArr['text'];
    $text = $textArr ? $textArr[array_rand($textArr)] : '';
    $clicaptcha->create($text);
}
else
{
    echo $clicaptcha->check($_POST["info"], false) ? 1 : 0;
}

