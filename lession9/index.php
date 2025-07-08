<?php
//Toán tử gán : = ; +=, -= , *= , /= ,%= , .=
$age = 24;
const PI = 3.14;
$age .=' là tuổi của tôi'; // $age = $age. là tuổi của tôi
echo $age;

//Toán số học : + , - , /, % , **, ++ , --
$a = 10;
$b = 20;

$tong = $a + $b;
$hieu = $a - $b;
$tich = $a * $b;
$thuong = $a / $b;
$chiaLayDu = $a % $b;
$aMub = $a ** $b;
echo $tong.'-'.$hieu.'-'.$tich.'-'.$thuong.'-'.$chiaLayDu.'-'.$aMub;
echo '<br>';

$count = 0;
$result = $count++; //0
echo $count.'-'. $result;

// Toán tử so sánh : < , > , ==, ===, <= , >= != trả về boolean
$a = 10 ;
$b = 11;
$check = $a > $b;
echo '<br>';
var_dump($check);

// == : chỉ so sánh giá trị , === so sánh cả kiểu dữ liệu
$x = '10';
$y = 10;
$check = $x == $y;
echo '<br>';
var_dump($check);
//!= và !== cũng tương tự
$i = '10';
$j = 10;
$check = $i !== $j;
echo '<br>';
var_dump($check);

//toán tử logic : && , || , ! (() =>not => and => or)

?>