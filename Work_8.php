<?php
function alo($string) {
    if ($string == strrev($string))
        return "Да";
    else
        return "Нет";
}
echo alo('pool')."<br>";
echo alo('lepsspel');
?>