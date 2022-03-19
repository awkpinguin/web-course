<?php

function getRequestParameter(string $key): ?string
{
    return $_GET[$key] ?? null;
}

$identifier = getRequestParameter('identifier');

if ($identifier === null || $identifier === "")
{
    echo 'Данные введены неверно';
}
else
{
    $arr=str_split('identifier');
    if (!ctype_alpha($arr[0]))
        echo "NO, идентификатор должен начинаться с буквы";
    for($i = 0; $i < count($arr); ++$i)
    {
        if (ctype_alpha($arr[$i]) || (is_numeric($arr[$i])))
            echo "YES, идентификатор верный";
    }
}