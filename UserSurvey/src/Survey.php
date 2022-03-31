<?php
/*class Survey
{
    private array $arguments;
    private string $parameter;

    public function __construct(string $firstName = "", string $lastName = "", string $email = "", string $age = "")
    {
        $this->arguments = [
            "First name"=>$firstName,
            "Last name"=>$lastName,
            "Email"=>$email,
            "Age"=>$age,
        ];
    }

    public function getArguments(string $parameter) : ?string
    {
        return $this->arguments[$parameter];
    }
}*/
class Survey
{
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $age;
    private array $arguments;

    public function __construct(string $firstName, string $lastName, string $email, string $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->age = $age;
    }

    public function getArguments()
    {
        return $this->arguments = [$this->firstName, $this->lastName, $this->email, $this->age];
    }
}

