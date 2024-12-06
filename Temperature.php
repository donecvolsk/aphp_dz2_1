<?php

class Temperature
{
    public string $name;
    public int $age;
    public string $surname;
    public const CRITICAL_VALUE = 28.0;

    public function __construct(string $name, string $surname, int $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->surname = $surname;
    }

    public function listing()
    {
        echo 'Имя ' . $this->name .' Фамилия '. $this->surname . ' Возраст ' . $this->age . PHP_EOL;
    
    }
       
}
