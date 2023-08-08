<?php
//Mảng qty lưu số lượng sản phẩm mới cho từng id sản phẩm trong giỏ hàng
if (isset($_POST['btn-update'])) {
    update_cart($_POST['qty']);
    redirect('?mod=cart&act=show');
}