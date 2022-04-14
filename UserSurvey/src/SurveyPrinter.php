<?php
class SurveyPrinter
{
    public static function printSurvey(Survey $survey): void
    {
        $infoStr = 'First name: ' . $survey->getFirstName() . '<br/>';
        $infoStr = $infoStr . 'Last name: ' . $survey->getLastName() . '<br/>';
        $infoStr = $infoStr . 'Email: ' . $survey->getEmail() . '<br/>';
        $infoStr = $infoStr . 'Age: ' . $survey->getAge() . '<br/>';
        echo $infoStr;
    }
}
