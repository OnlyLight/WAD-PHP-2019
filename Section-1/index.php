<?php
  // $test = 7;
  // $name = 1;
  // echo $test + $name;

  // function testFuntion($x = 1, $y = 2) {
  //     return $x + $y;
  // }

  // echo '<br />';
  // echo testFuntion(5 + 2);

  // echo '<br />';
  // echo testFuntion();

  // Bai Tap
  function checkDay($n) {
    if ($n < 2 || $n > 8) {
      echo 'Khong phai ngay trong tuan !!';
    } else if ($n == 2) {
      echo 'Thu Hai';
    } else if ($n == 3) {
      echo 'Thu Ba';
    } else if ($n == 4) {
      echo 'Thu Tu';
    } else if ($n == 5) {
      echo 'Thu Nam';
    } else if ($n == 6) {
      echo 'Thu Sau';
    } else if ($n == 7) {
      echo 'Thu Bay';
    } else if ($n == 8) {
      echo 'Chu Nhat';
    }
  }

  function checkDay2($n) {
    switch ($n) {
      case 2:
        echo 'Thu Hai';
        break;
      case 3:
        echo 'Thu Ba';
        break;
      case 4:
        echo 'Thu tu';
        break;
      case 5:
        echo 'Thu nam';
        break;
      case 6:
        echo 'Thu sau';
        break;
      case 7:
        echo 'Thu bay';
        break;
      case 8:
        echo 'Chu Nhat';
        break;
      default:
        echo 'Khong phai ngay trong tuan !!';
        break;
    }
  }

  // Loop
  function checkLoop() {
    for ($i=0; $i <= 100 ; $i++) { 
      if ($i % 6 === 0) {
        echo ''.$i.' Chia het cho 6';
        echo '<br />';
      } else if ($i % 2 === 0) {
        echo ''.$i.' Chia het cho 2';
        echo '<br />';
      } else if ($i % 3 === 0) {
        echo ''.$i.' Chia het cho 3';
        echo '<br />';
      } else {
        echo ''.$i.' Khong chia het cho 2,3,6';
        echo '<br />';
      }
    }
  }

  // checkLoop();

  // BT 5
  function bai5() {
    $sachBinh = 27;
    $sachMinh = $sachBinh / 3;
    $tongSach = $sachBinh + $sachMinh;
    $result = ($tongSach/3) - $sachMinh;
    
    return $result;
  }
  // echo bai5();

  // BT 6
  function bai6() {
    $soKeo = 2000 / 200;
    $soKeoThem = $soKeo / 2;
    return $soKeo + $soKeoThem;
  }

  echo bai6();
?>