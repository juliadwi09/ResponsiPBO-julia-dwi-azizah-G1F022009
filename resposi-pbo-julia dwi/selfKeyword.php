<?php

// import data/person.php
require_once "data/person.php";

// buat object baru dari kelas person
$person1 = new Person("julia dwi", "bengkulu");

// panggil function
$person1->sayHello("julia dwi");

// panggil self keyword
$person1->info();
