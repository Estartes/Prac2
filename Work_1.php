<?php

function test($L, $W)
{
    return area($L, $W);
}

function area($L, $W)
{
    $area = $L * $W;
    return "Прямоугольник длинной ".$L." и шириной ".$W." имеет площадь ".$area;
}

echo test(12,20);