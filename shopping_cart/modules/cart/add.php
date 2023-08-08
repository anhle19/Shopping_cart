<?php
//Lấy id product thêm vào cart
$id = (int) $_GET['id'];
add_cart($id);
redirect('?mod=cart&act=show');