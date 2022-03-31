<?php
require_once('src/common.inc.php');
$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage();
$surveyPrinter = new SurveyPrinter();

if (isset($_GET['email']))
{
    $getRequestParameter = $requestSurveyLoader->getRequestParameter();
    $getArguments = $getRequestParameter->getArguments();
    $getFile = $surveyFileStorage->getFile($getArguments);
    if ($getFile)
    {
        $printArguments = $surveyPrinter->printArguments($getArguments);
    }
}
else
{
    echo 'Нет ключа email.';
}