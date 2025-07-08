<?php
//Hằng số : chỉ khai báo được 1 lần và 1 giá trị k đổi
/*
Hằng số nhận tất cả các kiểu dữ liệu
cách đặt tên  :
- Chứ chứ số , chữ cái , dấu gạch dưới
- Bắt đầu bằng chữ cái , _ , $ (không lỗi nhưng k nên)
- Phân biệt chữ hoa chữ thường
- Theo quy tắc underscore (viết hoa + gạch dưới) VD : WEB_SITE
*/

// Cách 1 : sử dụng define ('name','value');
define('_WEB_HOST_ROOT','abc.com');
echo _WEB_HOST_ROOT;
echo '</br>';

//Cách 2 : sử dụng const
const PI = 3.14;
echo PI;

// defined : sử dụng để kiểm tra 1 hằng số đã tồn tại hay chưa
// chỉ sử dụng cho hằng , không sử dụng cho biến => true đã tồn tại , flase chưa tồn tại
$str = 'haha';
echo defined('PI');

// $str1;
var_dump($str1); //null