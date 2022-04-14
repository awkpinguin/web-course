<?php
require_once('src/common.inc.php');

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage();

$survey = $requestSurveyLoader->makeSurvey();
$data = $surveyFileStorage->getSurvey($survey);
$surveyPrinter = SurveyPrinter::printSurvey($data);