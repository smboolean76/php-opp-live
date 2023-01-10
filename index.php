<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/Employee.php";

// user normale
$samuele = new User("Samuele", "samuele.madrigali@gmail.com");
$samuele->setAge(70);
$samuele->setDiscount();

// employee
$samantha = new Employee("Samantha", "samantha.madrigali@gmail.com", 3);
$samantha->setAge(70);
$samantha->setDiscount();

var_dump($samuele, $samantha);
