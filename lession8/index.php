<?php

/*
PHP có 8 kiểu dữ liệu chính
1.int ( số nguyên )
2.float ( số thực )
3.string ( chuỗi )
4.boolean (logic)
5.null
6.array (mảng)
7.object (đối tượng)
8.resouce (tài nguyên)
Ngoài 8 , kiểu chính ra còn có các kiểu khác
*/

//int 
$age = 10;
var_dump($age);

$age =(int)10.5; //ép kiểu
var_dump($age);

echo is_int($age); // kiểm tra xem có phải số nguyên k
echo is_integer($age);

//boolean
$check = true;

echo is_bool($check); // sử dụng is_bool để kiểm tra 1 biến có phải là boolean không

$str = 0;
var_dump((bool)$str); // ép kiểu : 0 , null , '', false 
echo '<br>';
//float
$fee = 10;
var_dump($fee);
$fee = (float)$fee; //ép kiểu
var_dump($fee);
echo is_float($fee); //kiểm tra có phải là số thực

//string
$message = 10;
$message = (string)10; // ép như này hoặc nối thêm '' hoặc ""
var_dump($message); // var_dump dùng với string trả về kiểu string và độ dài (#giá trị như những kiểu khác)
var_dump(is_string($message)); // is_string() check string

//array
$array = [];
var_dump($array);
$array1 = array(1,2,3,4,'a');
var_dump($array1);
$array2 = array (
  'name'=>'Bùi Chí Bảo',
  'age'=>22,
  'adress'=>'Hà Tĩnh'
);
var_dump($array2);
var_dump((array)'123');//ép kiểu
var_dump(is_array([1,2]));//kiểm tra

//NULL : khi khai báo 1 biến mà không gắn cho nó 1 giá trị , hoặc = null thi bằng null
$total = NULL;
// ép kiểu
/*
null => int = 0
null => float = 0
null => string = ''
null => array = array(0) = {}
*/
var_dump(is_null($total)); //Kiểm tra kiểm null hay không
echo '<br>';

// var_dump((null)0); không thể ép kiểm về null

//Kiểu resource : tham chiếu đến 1 tài nguyên bên ngoài PHP : VD database
// sử dụng is_resource để kiếm tra

//Kiểu đối tượng (object)
$dataCustomer = 'ass';
var_dump((object)$dataCustomer); // ép được mọi kiểu sang object
//sử dụng is_object để kiểm tra

/*
 Phận biệt null và empty
 - null không thuộc về 1 kiểu dữ liệu nào , sinh ra để giữ chô cho biến mà không tiêu tốn vùng nhớ
 - empty : có vùng nhớ , có kiểu giá trị thuộc về , có giá trị : '', null, 0, 0.0 ,array()
*/

var_dump(empty(01));