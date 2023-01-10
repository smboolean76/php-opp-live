<?php

class User {
    private $name;
    private $email;
    protected $age;
    protected $discount;

    public function __construct(string $name, string $email)
    {
        if( strlen($name) > 4  ) {
            $this->name = $name;
        }
        $this->email = $email;   
    }

    public function setDiscount()
    {
        if($this->age > 65) {
            $this->discount = 40;
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setAge($age)
    {
       $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }
}