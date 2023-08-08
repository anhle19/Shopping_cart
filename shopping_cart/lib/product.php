<?php
function get_infor_cat($cat_id)
{
    global $list_product_cat;
    if (array_key_exists($cat_id, $list_product_cat)) {
        return $list_product_cat[$cat_id];
    }
    return false;
}

function get_list_product_by_cat_id($cat_id)
{
    global $list_product;
    $result = array();
    foreach ($list_product as $product) {
        if ($product['cat_id'] == $cat_id) {
            //Gắn url để đi vào detail 
            $product['url'] = "?mod=product&act=detail&id={$product['id']}";
            $result[] = $product;
        }
    }
    return $result;
}

function get_product_by_id($id)
{
    global $list_product;
    if (array_key_exists($id, $list_product)) {
        //Gắn url detail của sản phẩm
        $list_product[$id]['url'] = "?mod=product&act=detail&id={$list_product[$id]['id']}";
        //Gắn url để thêm vào giỏ hàng
        $list_product[$id]['url_cart'] = "?mod=cart&act=add&id={$id}";
        return $list_product[$id];
    }
    return false;
}
