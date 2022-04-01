<?php
class SurveyPrinter
{
    function printArguments($arguments)
    {
        $infoStr = "First name: " . $arguments[0] . "<br/>";
        $infoStr = $infoStr . 'Last name: ' . $arguments[1] . "<br/>";
        $infoStr = $infoStr . 'Email: ' . $arguments[2] . "<br/>";
        $infoStr = $infoStr . 'Age: ' . $arguments[3] . "<br/>";
        echo $infoStr;
    }
}
