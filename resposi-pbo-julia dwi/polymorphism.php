<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("julia dwi");
var_dump($company);

$company->programmer = new BackendProgrammer("eril zayan");
var_dump($company);

$company->programmer = new FrontendProgrammer("hanan ogawa");
var_dump($company);

sayHelloProgrammer(new Programmer("julia dwi"));
sayHelloProgrammer(new BackendProgrammer("eril zayan"));
sayHelloProgrammer(new FrontendProgrammer("hanan ogawa"));
