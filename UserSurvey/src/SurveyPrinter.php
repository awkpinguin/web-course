<?php
class SurveyPrinter
{
    function printArguments($arguments)
    {
        $infoStr = "First name: " . $arguments[0] . PHP_EOL;
        $infoStr = $infoStr . 'Last name: ' . $arguments[1] . PHP_EOL;
        $infoStr = $infoStr . 'Email: ' . $arguments[2] . PHP_EOL;
        $infoStr = $infoStr . 'Age: ' . $arguments[3];
        echo $infoStr;
    }
}
