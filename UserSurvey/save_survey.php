<?php
require_once('src/common.inc.php');
$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage();
$surveyPrinter = new SurveyPrinter();

if (isset($_GET['email']))
{
    $getRequestParameters = $requestSurveyLoader->getRequestParameters();
    $getArguments = $getRequestParameters->getArguments();
    $getFile = $surveyFileStorage->getFile($getArguments);
}
else
{
    echo 'Нет ключа email.';
}
