<?php
//! comparison operator
$firstExam = 80;
$secondExam  = 75;
if ( $firstExam > $secondExam ) {
    echo "The first exam score is is higher.";
} else {
    echo "The second exam score is is higher.";
}
echo "\n";

//? == Equal to
$price1 = 15;
$price2 = 30;
if ( $price1 == $price2 ) {
    echo "The price is equal.";
} else {
    echo "The price is not equal.";
}
echo "\n";
// TODO Example Cinema Tikite
$ticket1 = 3;
$ticket2 = 3;
if ( $ticket1 == $ticket2 ) {
    echo "The ticket number is equal.";
} else {
    echo "The ticket number mismatch.";
}
echo "\n";

//? Not equal !=
$color1 = "Red";
$color2 = "Green";
if ( $color1 != $color2 ) {
    echo "The colors are not the same";
} else {
 echo "The colors are the same";
 }
 echo "\n";

 // TODO Class exam
 $grade1 = 'A';
 $grade2 = 'B';

 if ( $grade1 != $grade2 ) {
    echo "Grades are not equal";
 } else {
    echo "Grades are equal";
 }
  echo "\n";

  // Product Price
  $price1 = 50;
  $price2 = 50;
  if ( $price1 != $price2 ) {
    echo "Price are not equal";
  } else {
    echo "Price are equal";
  }
echo "\n";

//? Identical operator
$number1 = 20;
$number2 = '20';
if ( $number1 === $number2 ) {
    echo "Details are identical";
} else {
     echo "Details are not identical";
}
echo "\n";

// TODO Example
$model1 = 'X100';
$model2 = 'X100';
if ( $model1 === $model2 ) {
    echo "Models are equal";
} else {
    echo "Models are not equal";
}
echo "\n";

//? Not identical operator
$score1 = 30;
$score2 = '30';
if ( $score1 !== $score2 ) {
    echo "The scores are not identical";
} else {
    echo "The scores are identical";
}
echo "\n";

//TODO example
//* age
$age1 = 20;
$age2 = '20';
if ( $age1 !== $age2 ) {
    echo 'Ages are not identical';
} else{
    echo 'Ages are identical';
}
echo "\n";
//* status
$status1 = 'Active';
$status2 = 'active';
if ( $status1 !== $status2 ) {
    echo 'Status bar are not identical';
} else{
    echo 'Status bar are identical';
}
echo "\n";

//? less than
$digit1 = 10;
$digit2 = 20;
if ( $digit1 < $digit2 ) {
    echo "$digit1 is less than $digit2";
} else {
    echo "$digit2 is less than $digit1";
}
echo "\n";
// TODO age comparison
$yourAge = 20;
$friendAge = 30;
if ( $yourAge < $friendAge ) {
    echo "you are smaller than your friend.";
} else {
     echo "you are biggest than your friend.";
}

// smart phone price
$phonePrice1 = 12000;
$phonePrice2 = 1500;
if ( $phonePrice1 < $phonePrice2 ) {
    echo 'Phone price is lower than';
} else{
    echo "Phone price is not lower.";
}