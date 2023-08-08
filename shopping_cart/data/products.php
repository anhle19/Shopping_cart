<?php

#Danh mục sản phẩm

/** 
 * id => id,
 * Tên danh mục => cat_title
 * 
 * 
 */

$list_product_cat = array(
    1 => array(
        'id' => 1,
        'cat_title' => 'Điện thoại'
    ),
    2 => array(
        'id' => 2,
        'cat_title' => 'Macbook'
    ),
    3 => array(
        'id' => 3,
        'cat_title' => 'Laptop'
    )

);

#Dữ liệu sản phẩm

/**
 * id => id,
 * Tên sản phẩm => product_title,
 * Giá => price,
 * Mã sản phẩm => code,
 * Mô tả => product_desc,
 * Ảnh đại diện => product_thumb => url,
 * Nội dung => product_content
 * id category => cat_id
 */


$list_product = array(
    1 => array(
        'id' => 1,
        'product_title' => 'Điện thoại iPhone 14 Pro Max 128GB',
        'price' => 26490000,
        'code' => 'LA#1',
        'product_desc' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022. Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang lại những trải nghiệm đầy mới mẻ cho người dùng iPhone</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-tim-thumb-600x600.jpg',
        'product_content' => "<p>iPhone 14 Pro Max một siêu phẩm trong giới smartphone được nhà Táo tung ra thị trường vào tháng 09/2022.
         Máy trang bị con chip Apple A16 Bionic vô cùng mạnh mẽ, đi kèm theo đó là thiết kế hình màn hình mới, hứa hẹn mang 
         lại những trải nghiệm đầy mới mẻ cho người' dùng iPhone</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/42/251192/iphone-14-pro-max-tim-thumb-600x600.jpg'/></p>",
        'cat_id' => 1
    ),
    2 => array(
        'id' => 2,
        'product_title' => 'Điện thoại OPPO Find N2 Flip 5G',
        'price' => 19990000,
        'code' => 'LA#2',
        'product_desc' => "<p>OPPO Find N2 Flip 5G - chiếc điện thoại gập đầu tiên của OPPO đã được giới thiệu chính thức tại Việt Nam vào tháng 03/2023. Sở hữu cấu hình mạnh mẽ cùng thiết kế siêu nhỏ gọn giúp tối ưu kích thước, chiếc điện thoại sẽ cùng bạn nổi bật trong mọi không gian với vẻ ngoài đầy cá tính</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/299034/oppo-find-n2-flip-purple-thumb-1-600x600-1-600x600.jpg',
        'product_content' => "<p>OPPO Find N2 Flip 5G - chiếc điện thoại gập đầu tiên của OPPO đã được giới thiệu chính thức tại Việt Nam vào tháng 03/2023. Sở hữu cấu hình mạnh mẽ cùng thiết kế siêu nhỏ gọn giúp tối ưu kích thước, chiếc điện thoại sẽ cùng bạn nổi bật trong mọi không gian với vẻ ngoài đầy cá tính</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/42/299034/oppo-find-n2-flip-purple-thumb-1-600x600-1-600x600.jpg'/></p>",
        'cat_id' => 1
    ),
    3 => array(
        'id' => 3,
        'product_title' => 'Điện thoại Samsung Galaxy Z Fold4 5G 256GB',
        'price' => 26990000,
        'code' => 'LA#3',
        'product_desc' => "<p>Tại sự kiện Samsung Unpacked thường niên, Samsung Galaxy Z Fold4 256GB chính thức được trình làng thị trường công nghệ, mang trên mình nhiều cải tiến đáng giá giúp Galaxy Z Fold trở thành dòng điện thoại gập đã tốt nay càng tốt hơn</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/42/250625/samsung-galaxy-z-fold4-kem-256gb-600x600.jpg',
        'product_content' => "<p>Tại sự kiện Samsung Unpacked thường niên, Samsung Galaxy Z Fold4 256GB chính thức được trình làng thị trường công nghệ, mang trên mình nhiều cải tiến đáng giá giúp Galaxy Z Fold trở thành dòng điện thoại gập đã tốt nay càng tốt hơn</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/42/250625/samsung-galaxy-z-fold4-kem-256gb-600x600.jpg'/></p>",
        'cat_id' => 1
    ),
    4 => array(
        'id' => 4,
        'product_title' => 'Laptop Apple MacBook Air 13 inch M1 2020',
        'price' => 18990000,
        'code' => 'LA#4',
        'product_desc' => "<p>Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg',
        'product_content' => "<p>Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/44/231244/macbook-air-m1-2020-gray-600x600.jpg'/></p>",
        'cat_id' => 2
    ),
    5 => array(
        'id' => 5,
        'product_title' => 'Laptop Apple MacBook Air 13 inch M2 2022',
        'price' => 27090000,
        'code' => 'LA#5',
        'product_desc' => "<p>Sau 14 năm, ba lần sửa đổi và hai kiến trúc bộ vi xử lý khác nhau, kiểu dáng mỏng dần mang tính biểu tượng của MacBook Air đã đi vào lịch sử. Thay vào đó là một chiếc MacBook Air M2 với thiết kế hoàn toàn mới, độ dày không thay đổi tương tự như MacBook Pro, đánh bật mọi rào cản với con chip Apple M2 đầy mạnh mẽ</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-vang-600x600.jpg',
        'product_content' => "<p>Sau 14 năm, ba lần sửa đổi và hai kiến trúc bộ vi xử lý khác nhau, kiểu dáng mỏng dần mang tính biểu tượng của MacBook Air đã đi vào lịch sử. Thay vào đó là một chiếc MacBook Air M2 với thiết kế hoàn toàn mới, độ dày không thay đổi tương tự như MacBook Pro, đánh bật mọi rào cản với con chip Apple M2 đầy mạnh mẽ</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/44/282827/apple-macbook-air-m2-2022-vang-600x600.jpg'/></p>",
        'cat_id' => 2
    ),
    6 => array(
        'id' => 6,
        'product_title' => 'Laptop Apple MacBook Pro 13 inch M2 2022',
        'price' => 29790000,
        'code' => 'LA#6',
        'product_desc' => "<p>Sở hữu thiết kế thanh lịch, sang trọng cùng hiệu năng vượt trội đến từ bộ vi xử lý Apple M2 tân tiến, Macbook Pro M2 hứa hẹn sẽ đáp ứng hoàn hảo cho người dùng sáng tạo, phục vụ tốt cho các nhu cầu thiết kế đồ họa nâng cao</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/282828/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg',
        'product_content' => "<p>Sở hữu thiết kế thanh lịch, sang trọng cùng hiệu năng vượt trội đến từ bộ vi xử lý Apple M2 tân tiến, Macbook Pro M2 hứa hẹn sẽ đáp ứng hoàn hảo cho người dùng sáng tạo, phục vụ tốt cho các nhu cầu thiết kế đồ họa nâng cao</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/44/282828/apple-macbook-pro-13-inch-m2-2022-xam-600x600.jpg'/></p>",
        'cat_id' => 2
    ),
    7 => array(
        'id' => 7,
        'product_title' => 'Laptop MSI Gaming GF63 Thin 11SC',
        'price' => 14990000,
        'code' => 'LA#7',
        'product_desc' => "<p>Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/303500/msi-gaming-gf63-thin-11sc-i5-664vn-glr-thumb-600x600.jpg',
        'product_content' => "<p>Mang trong mình sức mạnh hiệu năng của bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce GTX, laptop MSI Gaming GF63 Thin 11SC i5 (664VN) có khả năng chiến game nặng và thiết kế đồ họa một cách mượt mà</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/44/303500/msi-gaming-gf63-thin-11sc-i5-664vn-glr-thumb-600x600.jpg'/></p>",
        'cat_id' => 3
    ),
    8 => array(
        'id' => 8,
        'product_title' => 'Laptop Acer Aspire 7 Gaming A715 76G',
        'price' => 15990000,
        'code' => 'LA#8',
        'product_desc' => "<p>Một dòng laptop gaming được cải tiến hoàn toàn mới đến từ nhà Acer, Aspire 7 Gaming 2023 mang ngoại hình tối giản, đẹp mắt cùng những thông số cấu hình mạnh mẽ, vừa đáp ứng được việc chiến game, vừa xử lý hiệu quả mọi tác vụ thường ngày. Laptop Acer Aspire 7 Gaming A715 76G 5132 i5 12450H (NH.QMESV.002) chắc chắn sẽ là sự lựa chọn hoàn hảo dành cho bạn</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/307786/acer-aspire-7-gaming-a715-76g-5132-i5-nhqmesv002-thumb-600x600.jpg',
        'product_content' => "<p>Một dòng laptop gaming được cải tiến hoàn toàn mới đến từ nhà Acer, Aspire 7 Gaming 2023 mang ngoại hình tối giản, đẹp mắt cùng những thông số cấu hình mạnh mẽ, vừa đáp ứng được việc chiến game, vừa xử lý hiệu quả mọi tác vụ thường ngày. Laptop Acer Aspire 7 Gaming A715 76G 5132 i5 12450H (NH.QMESV.002) chắc chắn sẽ là sự lựa chọn hoàn hảo dành cho bạn</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/44/307786/acer-aspire-7-gaming-a715-76g-5132-i5-nhqmesv002-thumb-600x600.jpg'/></p>",
        'cat_id' => 3
    ),
    9 => array(
        'id' => 9,
        'product_title' => 'Laptop Asus TUF Gaming F15 FX506HF',
        'price' => 16790000,
        'code' => 'LA#9',
        'product_desc' => "<p>Với bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce RTX 2050 4 GB, laptop Asus TUF Gaming F15 FX506HF là một trong những lựa chọn tuyệt vời cho các game thủ và những người dùng làm việc đa tác vụ hoặc liên quan đến đồ họa, kỹ thuật</p>",
        'product_thumb' => 'https://cdn.tgdd.vn/Products/Images/44/304867/asus-tuf-gaming-f15-fx506hf-i5-hn014w-thumb-600x600.jpg',
        'product_content' => "<p>Với bộ vi xử lý Intel Core i5 dòng H mạnh mẽ và card đồ họa rời NVIDIA GeForce RTX 2050 4 GB, laptop Asus TUF Gaming F15 FX506HF là một trong những lựa chọn tuyệt vời cho các game thủ và những người dùng làm việc đa tác vụ hoặc liên quan đến đồ họa, kỹ thuật</p>"
            . "<p><img src='https://cdn.tgdd.vn/Products/Images/44/304867/asus-tuf-gaming-f15-fx506hf-i5-hn014w-thumb-600x600.jpg'/></p>",
        'cat_id' => 3
    )
);
