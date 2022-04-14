<?php
class SurveyFileStorage
{
    private const BASE = './data/';
    private const EXTENSION = '.txt';

    public function saveSurvey(Survey $survey): void
    {
        $email = $survey->getEmail();

        if ($email !== '')
        {
            $fileName = self::BASE . $email . self::EXTENSION;
            $prevSurvey = $this->getSurvey($survey);
            $text = $this->makeStringForFile($survey, $prevSurvey);
            file_put_contents($fileName, $text);
        }
    }

    public function getSurvey(Survey $survey): Survey
    {
        $fileName = self::BASE . $survey->getEmail() . self::EXTENSION;

        if  (file_exists($fileName))
        {
            $marker = fopen($fileName, 'r');
            if ($marker)
            {
                $text = $this->readStringFromFile($marker);
                fclose($marker);
                $array = $this->splitStringToArray($text);
                return new Survey($array['First name'], $array['Last name'], $array['Email'], $array['Age']);
            }
        }

        return new Survey();
    }

    private function makeStringForFile(Survey $survey, Survey $prevSurvey): string
    {
        $prepString = '';
        $values = [
            'First name' => $survey->getFirstName() !== '' ? $survey->getFirstName() : $prevSurvey->getFirstName(),
            'Last name' => $survey->getLastName() !== '' ? $survey->getLastName() : $prevSurvey->getLastName(),
            'Age' => $survey->getAge() !== '' ? $survey->getAge() : $prevSurvey->getAge(),
            'Email' => $survey->getEmail() !== '' ? $survey->getEmail() : $prevSurvey->getEmail(),
        ];
        foreach (array_keys($values) as $key)
        {
            $prepString .= $key . ': ' . $values[$key] . '&';
        }
        return $prepString;
    }

    private function readStringFromFile($marker): string
    {
        $text = '';
        while ($buffer = fgets($marker))
        {
            $text .= str_replace('\n', '', $buffer) . '&';
        }
        return substr($text, 0, -1);
    }

    private function splitStringToArray(string $text): array
    {
        $arr = explode('&', $text);
        $parsedArr = [];
        foreach ($arr as $value)
        {
            $pair = explode(': ', $value);
            $parsedArr[$pair[0]] = $pair[1];
        }
        return $parsedArr;
    }
}