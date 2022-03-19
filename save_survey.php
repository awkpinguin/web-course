<?php

$name = $_GET['name'] ?? null;

if ($name === null)
{
    echo 'Hello Anonymus!';
}
else
{
    echo "Hello {$name}";
}