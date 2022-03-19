<?php

function getRequestParameter(string $key): ?string
{
    return $_GET[$key] ?? null;
}

$name = getRequestParameter('name');

if ($name === null || $name === "")
{
    echo 'Hello Anonymous!';
}
else
{
    echo "Hello {$name}";
}