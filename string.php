<?php
$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = array("a", "e", "i", "o", "u");

$n = count($strings);

for($i=0; $i<$n; $i++){
     $str = $strings[$i];
      $strlen = strlen($str);
      $count = 0;
      for ($j=0; $j<$strlen; $j++) {
      if (in_array(strtolower($str[$j]), $vowels)) {
        $count++;
      }
    }
  echo "Original String: ".$str.", Vowel Count: ".$count.", Reversed String: ",strrev($str)."\n";
}




// $vowels = array("a", "e", "i", "o", "u");
// $str = "Helloia";
//       echo $strlen = strlen($str)."\n";
//       $count = 0;
//       for ($j=0; $j<$strlen;$j++) {
//       if (in_array(strtolower($str[$j]), $vowels)) {
//         $count++;
//       }
//     }
//   echo "Number of vowels in $str is: $count"."\n";
    
  





// $str = "Hello I am PHP trainee of dianapps";
// $vowels = array("a", "e", "i", "o", "u");
// $count = 0;
// for ($i = 0; $i < strlen($str); $i++) {
//   if (in_array(strtolower($str[$i]), $vowels)) {
//     $count++;
//   }
// }
// echo "Number of vowels in $str is: $count";



















?>