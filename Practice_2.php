// if else else if:
==================
<?php 
$score = 40;

if($score >=80 && $score <100){
echo "A+";
}else if ($score >=70 && $score <80){
    echo "A";
}else if ($score >=60 && $score <70){
    echo "A-";
}else if ($score >=50 && $score <60){
    echo "B";
}else if ($score >=40 && $score <50){
    echo "C";
}else if ($score >=33 && $score <40){
    echo "D";
}else {
    echo " F";
}
//nested if else:
===================
<?php 
$score = 60;
$gread = '';
if($score >=80){
     $gread = 'A+';
}else {
     if($score >=70){
          $gread = 'A';
     } else {
          if($score >=60){
               $gread = 'A-';
          }else {
               if($score >=50){
                    $gread = 'B';
               }else {
                    if($score >=40){
                         $gread = 'C';
                    }else {
                         if($score >=33){
                              $gread = 'D';
                         }else {
                              $gread = 'F';
                         }
                    }
               }
          }
     }
}
printf($gread);



//switch case
====================
    $x = 2;

switch ($x) {

 case 1:

      echo "One";

      break;

 case 2:

      echo "Two";

      break;

 case 3:

      echo "Three";

      break;

 default:

      echo "None";

}

