<?php
function binarySearch(array $numbers, int $needle): bool { 
    $low = 0; 
    $high = count($numbers) - 1; 
    while ($low <= $high) { 
      $mid = (int) (($low + $high) / 2); 

      if ($numbers[$mid] > $needle) { 
          $high = $mid - 1;
      } else if ($numbers[$mid] < $needle) { 
          $low = $mid + 1;
      } else {
          return TRUE;
      }
    }
    return FALSE; 
}
$numbers = range(1, 200, 5); 

$number = 31;
if (binarySearch($numbers, $number) !== FALSE) { 
    echo "$number Found \n"; 
} else { 
    echo "$number Not found \n"; 
} 

$number = 500; 
if (binarySearch($numbers, $number) !== FALSE) { 
    echo "$number Found \n"; 
} else { 
    echo "$number Not found \n"; 
} 