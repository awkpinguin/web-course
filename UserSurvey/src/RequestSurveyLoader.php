<?php
/*class RequestSurveyLoader
{
    private string $firstName = "";
    private string $lastName = "";
    private string $email = "";
    private string $age = "";

    public function getRequestParameter(): Survey
    {
        $this->firstName = $_GET["first_name"];
        $this->lastName = $_GET["last_name"];
        $this->email = $_GET["email"];
        $this->age = $_GET["age"];
        return new Survey($this->firstName, $this->lastName, $this->email, $this->age);
    }
}*/
class RequestSurveyLoader
{
    public function getRequestParameter()
    {
        $arguments = [
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'age' => '',
        ];

        foreach($arguments as $key => &$value)
        {
            $value = $_GET[$key];
        }

        return new Survey($arguments['first_name'] . '', $arguments['last_name'] . '', $arguments['email'], $arguments['age'] . '');
    }
}
