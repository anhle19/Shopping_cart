<?php
get_header();
?>
<?php
//Lấy thông tin category
$infor_mobile = get_infor_cat(1);
$infor_macbook = get_infor_cat(2);

//Lấy danh sách sản phẩm theo category
$list_mobile = get_list_product_by_cat_id(1);
$list_macbook = get_list_product_by_cat_id(2);
?>
<div id="main-content-wp" class="home-page">
    <div class="wp-inner clearfix">
        <?php get_sidebar() ?>
        <div id="content" class="fl-right">
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">
                        <a href="?mod=product&act=main&cat_id=<?php echo $infor_mobile['id'] ?>"><?php echo $infor_mobile['cat_title'] ?></a>
                    </h3>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_mobile)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_mobile as $mobile) {
                            ?>
                                <li>
                                    <a href=<?php echo $mobile['url'] ?> title="" class="thumb">
                                        <img src=<?php echo $mobile['product_thumb'] ?> alt="">
                                    </a>
                                    <a href=<?php echo $mobile['url'] ?> title="" class="title"><?php echo $mobile['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($mobile['price'], 'đ') ?></p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    <?php
                    }
                    ?>

                </div>
            </div>
            <div class="section list-cat">
                <div class="section-head">
                    <h3 class="section-title">
                        <a href="?mod=product&act=main&cat_id=<?php echo $infor_macbook['id'] ?>"><?php echo $infor_macbook['cat_title'] ?></a>
                    </h3>
                </div>
                <div class="section-detail">
                    <?php
                    if (!empty($list_macbook)) {
                    ?>
                        <ul class="list-item clearfix">
                            <?php
                            foreach ($list_macbook as $macbook) {
                            ?>
                                <li>
                                    <a href=<?php echo $macbook['url'] ?> title="" class="thumb">
                                        <img src=<?php echo $macbook['product_thumb'] ?> alt="">
                                    </a>
                                    <a href=<?php echo $macbook['url'] ?> title="" class="title"><?php echo $macbook['product_title'] ?></a>
                                    <p class="price"><?php echo currency_format($macbook['price'], 'đ') ?></p>
                                </li>
                            <?php
                            }
                            ?>
                        </ul>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>