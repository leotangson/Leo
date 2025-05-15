<?php

$score = 85;


if ($score >= 90 && $score <= 100) {
    $grade = "A";
    $status = "Passed";
} elseif ($score >= 80 && $score <= 89) {
    $grade = "B";
    $status = "Passed";
} elseif ($score >= 70 && $score <= 79) {
    $grade = "C";
    $status = "Passed";
} elseif ($score >= 60 && $score <= 69) {
    $grade = "D";
    $status = "Passed";
} elseif ($score < 60) {
    $grade = "F";
    $status = "Failed";
} else {
    $grade = "Invalid score";
    $status = "";
}


echo "Score: $score\n";
echo "Grade: $grade\n";
echo "Status: $status\n";
?>
