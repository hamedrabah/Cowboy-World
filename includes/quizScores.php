<!-- I used this site to learn how to create a quiz --> https://css-tricks.com/building-a-simple-quiz/
<?php

$q1 = $_POST['question-1-answers'];
$q2 = $_POST['question-2-answers'];

$oneCorrect = 0;
$twoCorrect = 0;

if ($q1 == "B") { $oneCorrect++; }
if ($q2 == "C") { $twoCorrect++; }

?>
