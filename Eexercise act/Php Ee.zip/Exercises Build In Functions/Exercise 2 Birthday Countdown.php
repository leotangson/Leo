<?php

$birthday = "02-10";


$currentYear = date("Y");


$birthdayDate = DateTime::createFromFormat("Y-m-d", "$currentYear-$birthday");


$today = new DateTime();


if ($birthdayDate < $today) {
    $birthdayDate->modify('+1 year');
}


$interval = $today->diff($birthdayDate);


echo "There are " . $interval->days . " day(s) left until your birthday!";
?>
