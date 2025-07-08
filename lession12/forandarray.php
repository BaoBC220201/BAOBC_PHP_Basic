<?php
$array = array(
    'bảo',
    'bùi',
    'hihi'
);

//count :sử dụng để đếm có bao nhiêu phần tử trong mảng
echo count($array);
echo $array[1];


for($i=0 ; $i<count($array);$i++){
    echo $array[$i].' ';
}

?>