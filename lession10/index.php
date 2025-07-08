<?php
// có 3 có trúc dạng if : if đơn - if else - if else kết hợp

// $number = 1;
// if($number > 1){
//     echo "lớn hơn 1";
// }

// if($number > 1){
//     echo "lớn hơn 1";
// }else {
//      echo "bé hơn 1 hoặc bằng 1";
// }

$number = 15;
if($number < 0){
    echo "số âm";
}else if($number == 0){
     echo "bằng 0";
}else if($number > 0 && $number <= 5){
     echo "số nhỏ";
}else if($number > 5 && $number <= 10){
     echo "số trung bình";
}else if($number > 10 && $number <= 15){
     echo "số lớn";
}else{
     echo "số cực lớn";
}

//lồng
$age = 0;
if($age > 0){
    if($age < 18){
        echo 'Chưa được xem';
    }else {
        echo 'Duyệt';
    }
}else {
    echo 'Tuổi không hợp lệ';
}
?>