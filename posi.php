 
 <?php
 $posit =array(33,22,33,44,66,55,77,88,99);
 arsort($posit);
  foreach ($posit as $k => $v) {
      $posi[$k] = $i;
      $i++;
  }
  print_r($posi);
  ?>