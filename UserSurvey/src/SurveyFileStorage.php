<?php
class SurveyFileStorage
{
    public function getFile($arguments)
    {
        if ($arguments[2] === "")
        {
            echo "В ключе email не указано значение.";
        }
        else
        {
            $fileName = "./data/" . $arguments[2] . ".txt";

            if (file_exists($fileName))
            {
                $infoFile = file($fileName);
                if ($arguments[0] === null || $arguments[0] === "")
                {
                    $arguments[0] = trim(substr($infoFile[0], strpos($infoFile[0], ':') + 1));
                }
                if ($arguments[1] === null || $arguments[1] === "")
                {
                    $arguments[1] = trim(substr($infoFile[1], strpos($infoFile[1], ':') + 1));
                }
                if ($arguments[3] === null || $arguments[3] === "")
                {
                    $arguments[3] = trim(substr($infoFile[3], strpos($infoFile[3], ':') + 1));
                }
            }
            $infoStr = "First Name: " . $arguments[0] . PHP_EOL;
            $infoStr = $infoStr . "Last Name: " . $arguments[1] . PHP_EOL;
            $infoStr = $infoStr . "Email: " . $arguments[2] . PHP_EOL;
            $infoStr = $infoStr . "Age: " . $arguments[3];

            file_put_contents($fileName, $infoStr);

            return true;
        }
    }
}