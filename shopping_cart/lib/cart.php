<?php 
function add_cart($id) {
    $item = get_product_by_id($id);
    //Đếm số lượng sản phẩm cùng loại được thêm
    $qty = 1;
    //Kiểm tra số lượng
    if(isset($_SESSION['cart']) && array_key_exists($id,$_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] +1;
    }
    //Lưu sản phẩm vào giỏ hàng
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'url' => $item['url'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code' => $item['code'],
        //Số lượng sản phẩm
        'qty' => $qty,
        //Tổng thành tiền của sản phẩm
        'sub_total' => $item['price'] * $qty
    );
    //Cập nhật hóa đơn
    update_infor_cart();
}

function update_infor_cart() {
    if(isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;

        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['sub_total'];
        }
        //Lưu thông tin giỏ hàng
        $_SESSION['cart']['infor'] = array(
            //Tổng số sản phẩm tất cả các loại
            'num_order' => $num_order,
            //Tổng giá tiền của giỏ hàng
            'total' => $total
        );
    }
}

//Lấy danh sách sản phẩm trong giỏ hàng
function get_list_buy_cart() {
    if(isset($_SESSION['cart'])) {
        //Thêm url để delete sản phẩm
        //& dùng để tham trị cập nhật dữ liệu của item vào lại mảng
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&act=delete&id={$item['id']}";
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
}

function get_num_order_cart() { 
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['infor']['num_order'];
    }
    return 0;
}

function get_total_cart() {
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['infor']['total'];
    }
    return 0;
}

function delete_cart($id) {
    if (isset($_SESSION['cart'])) {
        //Kiểm tra sản phẩm có id trong giỏ hàng
        if(!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_infor_cart();
        } else {
            //Xóa toàn bộ sản phẩm khi không có id
            unset($_SESSION['cart']);
        }
    }
}

//Cập nhật số lượng sản phẩm mới trong giỏ hàng
function update_cart($qty) {
    foreach ($qty as $id => $new_value) {
        $_SESSION['cart']['buy'][$id]['qty'] = $new_value;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_value * $_SESSION['cart']['buy'][$id]['price'];
    }
}