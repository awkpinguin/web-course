<?php
require_once('src/common.inc.php');

$requestSurveyLoader = new RequestSurveyLoader();
$surveyFileStorage = new SurveyFileStorage();

$survey = $requestSurveyLoader->makeSurvey();
$surveyFileStorage->saveSurvey($survey);
