<?php
$book=$data["book"];
$books=$data["books"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/nha_nam/app/asset/style2.css">
    <link rel="stylesheet" href="http://localhost/nha_nam/app/asset/login.css">
    <link rel="stylesheet" href="http://localhost/nha_nam/app/asset/reponsive.css">
    <link rel="icon" href="//bizweb.dktcdn.net/100/363/455/themes/918830/assets/favicon.png?1704690471681" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
</head>
<body>

<?php echo $book->name?>
<div class="container">
       <div class="child-container-1" style="height: 50px;">
            <div class="grid wide" style="margin-top: 5px;">
                    <a style="margin-left: 10px;" href="https://nhanam.vn/">Trang chủ</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <a style="margin-left: 10px;" href="https://nhanam.vn/">Sách mới xuất bản</a>
                    <i class="fa-solid fa-chevron-right"></i>
                    <span style="color: #228b22;"><?php echo $book->name?></span>      
            </div> 
       </div>
       <div class="child-container-2">
            <div class="grid wide">
                <div class="row">
                    <div class="product col l-5 m-12 c-12">
                        <div class="product-image">
                            <a href="">
                            <img style="width: 320px; margin: 34px 98px;" src="<?php echo $book->picture ?>" alt="<?php echo $book->name ?>" title="<?php echo $book->name ?>" >
                            </a>
                        </div>
                    </div>
                    <div class="product-detail col l-5 m-12 c-12">
                        <h1 class="title-head"><?php echo $book->name?></h1>
                        <div class="author">
                            Tác giả: &nbsp;
                            <a href="" class="text-transform"><?php echo $book->author ?></a>
                        </div>
                        <div class="group-button">
                            <div class="price">
                                <div class="price-box">
                                    <span class="special-price">
                                        <span class="product-price"><?php echo number_format($book->price,0,",",".") ?><u>đ</u></span>
                                    </span>
                                    <span class="old-price">
                                        <span class="product-price-old">145.000₫</span>
                                        <span class="discount">-15%</span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-product">
                                <div class="add-cart">
                                    <div class="custom-number">
                                        <div class="btn-number">
                                            <button class="btn-1" id="decreaseBtn" onclick="decrease()">-</button>
                                            <div id="counter">1</div>
                                            <button class="btn-1" id="increaseBtn" onclick="increase()">+</button>
                                        </div>
                                        <span style="padding-left: 5px; font-size: 16px; color: #777777;">Còn lại 199 trong kho</span>
                                    </div>
                                    <div class="btn-mua">
                                        <button type="submit" class="btn-2 btn-add" style="border: 1px solid;">Thêm vào giỏ hàng</button>
                                        <button type="button" class="btn-2 btn-buy" style="border: 1px solid;">Mua ngay</button>
                                    </div>
                                </div>

                                <div class="shop">
                                    <p style="padding: 0 15px 0 0;">Mua sách trên sàn TMĐT</p>
                                    <div class="social">
                                        <a href="https://www.lazada.vn/shop/nha-nam-tphcm1632821525/" class="social-btn" target="_blank">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/lazada-icon.png?1704690471681" alt="" class="social-icon">
                                        </a>
                                        <a href="https://shopee.vn/nhanam59" class="social-btn" target="_blank">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/shopee-icon.png?1704690471681" alt="" class="social-icon">
                                        </a>
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>

                <div class="child-content row">
                    <div class="col l-8 m-12 c-12">
                        <h4 class="title-tab">Giới thiệu sách</h4>
                        <div class="context">
                            <div class="data">
                                <div class="text">
                                    <p style="text-align: justify;"><?php echo $book->description  ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4 m-12 c-12">
                        <div class="book-info">
                            <h2 class="title-tab">Thông tin chi tiết</h2>
                            <ul class="book-info-detail">
                                <li>
                                    <span class="span-1">Tác giả</span>
                                    <span class="span-2"><?php echo $book->author  ?></span>
                                </li>
                                <li>
                                    <span class="span-1">Dịch giả</span>
                                    <span class="span-2">Vương Thúy Quỳnh Anh</span>
                                </li>
                                <li>
                                    <span class="span-1">Nhà xuất bản</span>
                                    <span class="span-2">Thông Tấn</span>
                                </li>
                                <li>
                                    <span class="span-1">Kích thước</span>
                                    <span class="span-2">Đang cập nhật</span>
                                </li>
                                <li>
                                    <span class="span-1">Số trang</span>
                                    <span class="span-2">Đang cập nhật</span>
                                </li>
                                <li>
                                    <span class="span-1">Ngày phát hành</span>
                                    <span class="span-2">2024</span>
                                </li>
                            </ul>
                        </div>
                        <div class="related-blog">
                            <h2 class="title-tab">
                                <a href="#" style="color: #228b22;">Giới thiệu sách Nhã Nam</a>
                            </h2>
                            <div class="blog-list">
                                <div class="item">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/seo-2.png?v=1700487959943" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">5 bí quyết dưỡng ẩm đắt giá - Chăm sóc da hiệu quả ngay trong mùa đông</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Hai, 20/11/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/seo-1.png?v=1700281321867" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">Khám phá bí mật làm thịt lợn quay bì giòn tại gia</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Bảy, 18/11/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/nha-nam-website-3154da6f-42a3-4ff9-b4c5-f7b217989147.png?v=1699532816857" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">Những cuốn sách dành cho người hướng nội</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Năm, 09/11/2023</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="item-blog">
                                        <a href="" class="thumb">
                                            <img src="https://bizweb.dktcdn.net/100/363/455/articles/ban-do-cf.png?v=1698399264317" alt="" class="img-blog">
                                        </a>
                                        <div class="content-blog">
                                            <h3>
                                                <a href="">Sự thật ám ảnh về loại cafe đắt nhất thế giới</a>
                                            </h3>
                                            <span style="font-size: 14px; color: #7B7B7D;">Thứ Sáu, 27/10/2023</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-3">
                    <!-- top content 3-->
                    <div class="top-content-3">
                        <h1 style="font-size: 28px;">Có thể bạn cũng thích</h1>
                        <a href="" class="seen-more">
                            <h3 style="font-size: 15px;">Xem thêm</h3>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- below content 3 -->
                    <div class="below-content-3">
        <?php 
            $i=0; $counter=0;
            for ($i, $counter; $i < 5; $i++) {
                if ($books[$i]->id != $book->id){
                echo '<a href="http://localhost/nha_nam/book/index/'.$books[$i]->id.'" class="pic-content-3-hover">
                <li>
                    <img src="'.$books[$i]->picture.'" alt="'.$books[$i]->name.'" title="'.$books[$i]->name.'">
                    <div class="buy-cart">
                        <div class="cart"><i class="fa fa-shopping-bag"></i></div>
                        <div class="buy">Mua ngay</div>
                    </div>
                </li>
                <div class="book-name-price">
                    <h3>'.$books[$i]->name.'</h3>
                    <div class="price-book">
                        <h3>'.number_format($books[$i]->price,0,",",".").'<u>đ</u></h3>
                        <del>145.000<u>đ</u></del>
                    </div>
                </div>
            </a>'  ; 
            } 
            else {
                $counter=1;
                continue;
            }
        }
        if ($counter== 1){
            echo '<a href="http://localhost/nha_nam/book/index/'.$books[$i]->id.'" class="pic-content-3-hover">
            <li>
                <img src="'.$books[$i]->picture.'" alt="'.$books[$i]->name.'" title="'.$books[$i]->name.'">
                <div class="buy-cart">
                    <div class="cart"><i class="fa fa-shopping-bag"></i></div>
                    <div class="buy">Mua ngay</div>
                </div>
            </li>
            <div class="book-name-price">
                <h3>'.$books[$i]->name.'</h3>
                <div class="price-book">
                    <h3>'.number_format($books[$i]->price,0,",",".").'<u>đ</u></h3>
                    <del>145.000<u>đ</u></del>
                </div>
            </div>
        </a>'  ;
        }
        ?>
        </div>
                </div>
            </div>
       </div>    
    </div>
    <script src="http://localhost/nha_nam/app/asset/script2.js">
    </script>
</body>
</html>