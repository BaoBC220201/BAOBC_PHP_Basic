<?php
//Hàm isset kiểm tra 1 biến có tồn tại hoặc đã được khai báo hay chưa ?
// đã tồn tại , đã khai báo : true
// chưa tồn tại, chưa khai báo : false

$a = 10;
// unset($a); sử dụng để xóa, đi 1 biến đã tồn tại, nghiêm cứu sâu hơn
if( isset($a)){
    echo "Tồn tại";
}else {
    echo "Không tồn tại";
}

?>