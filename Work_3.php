<?php

function test($n)
{
    return fact($n);
}

function fact($n)
{
    $result = 1;
    for ($i = 1; $i <= $n; $i++)
    {
        $result = $result * $i;
    }
    return $result;
}

echo test(4);