<?php
//Lấy id sản phẩm cần xóa
$id = $_GET['id'];
delete_cart($id);

redirect('?mod=cart&act=show');
