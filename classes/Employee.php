<?php
require_once __DIR__ . "/User.php";

class Employee extends User {
    private $level;

    public function __construct($name, $email, int $level)
    {
        parent::__construct($name, $email);
        $this->setLevel($level);
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setDiscount()
    {
        // if($this->age > 65) {
        //     $this->discount = 40;
        // }
        // $this->discount += 10 * $this->level;
    }
}