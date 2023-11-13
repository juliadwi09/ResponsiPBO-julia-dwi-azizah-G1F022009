<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$julia = new Person("julia dwi", "bengkulu");

// tambahkan value nama di object
$julia->nama = "julia dwi";

// panggil function sayHelloNull dengan parameter
$julia->sayHelloNull("julia dwi");

// buat object dari kelas person
$dwi = new Person("lia", "jawa");

// tambahkan value nama di object
$dwi->nama = "julia dwi";

// panggil function sayHelloNull dengan parameter null
$dwi->sayHelloNull(null);
