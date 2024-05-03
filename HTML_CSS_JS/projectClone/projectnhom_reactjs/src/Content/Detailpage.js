import './Detailpage.module.css';
import React from 'react';

function Detailpage(){
    return(
        <>
            <div className="container">
                <div className="child-container-1" style={{ height: 50 }}>
                <div className="grid wide" style={{ marginTop: 5 }}>
                    <a style={{ marginLeft: 10 }} href="https://nhanam.vn/">
                    Trang chủ
                    </a>
                    <i className="fa-solid fa-chevron-right" />
                    <a style={{ marginLeft: 10 }} href="https://nhanam.vn/">
                    Sách mới xuất bản
                    </a>
                    <i className="fa-solid fa-chevron-right" />
                    <span style={{ color: "#228b22" }}>
                    KHÔNG CÓ TUYỆT VỌNG TRÊN INSTAGRAM
                    </span>
                </div>
                </div>
                <div className="child-container-2">
                <div className="grid wide">
                    <div className="row">
                    <div className="product col l-5 m-12 c-12">
                        <div className="product-image">
                        <a href="">
                            <img
                            src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/khong-co-tuyet-vong-tren-instagram-01-e1710474202548.jpg?v=1710474211207"
                            alt=""
                            className="item-image"
                            />
                        </a>
                        </div>
                    </div>
                    <div className="product-detail col l-5 m-12 c-12">
                        <h1 className="title-head">KHÔNG CÓ TUYỆT VỌNG TRÊN INSTAGRAM</h1>
                        <div className="author">
                        Tác giả: &nbsp;
                        <a href="" className="text-transform">
                            jeong jiwoo
                        </a>
                        </div>
                        <div className="group-button">
                        <div className="price">
                            <div className="price-box">
                            <span className="special-price">
                                <span className="product-price">123.250₫</span>
                            </span>
                            <span className="old-price">
                                <span className="product-price-old">145.000₫</span>
                                <span className="discount">-15%</span>
                            </span>
                            </div>
                        </div>
                        <div className="form-product">
                            <div className="add-cart">
                            <div className="custom-number">
                                <div className="btn-number">
                                <button
                                    className="btn-1"
                                    id="decreaseBtn"
                                    onclick="decrease()"
                                >
                                    -
                                </button>
                                <div id="counter">1</div>
                                <button
                                    className="btn-1"
                                    id="increaseBtn"
                                    onclick="increase()"
                                >
                                    +
                                </button>
                                </div>
                                <span
                                style={{ paddingLeft: 5, fontSize: 16, color: "#777777" }}
                                >
                                Còn lại 199 trong kho
                                </span>
                            </div>
                            <div className="btn-mua">
                                <button
                                type="submit"
                                className="btn-2 btn-add"
                                style={{ border: "1px solid" }}
                                >
                                Thêm vào giỏ hàng
                                </button>
                                <button
                                type="button"
                                className="btn-2 btn-buy"
                                style={{ border: "1px solid" }}
                                >
                                Mua ngay
                                </button>
                            </div>
                            </div>
                            <div className="shop">
                            <p style={{ padding: "0 15px 0 0" }}>Mua sách trên sàn TMĐT</p>
                            <div className="social">
                                <a
                                href="https://www.lazada.vn/shop/nha-nam-tphcm1632821525/"
                                className="social-btn"
                                target="_blank"
                                >
                                <img
                                    src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/lazada-icon.png?1704690471681"
                                    alt=""
                                    className="social-icon"
                                />
                                </a>
                                <a
                                href="https://shopee.vn/nhanam59"
                                className="social-btn"
                                target="_blank"
                                >
                                <img
                                    src="https://bizweb.dktcdn.net/100/363/455/themes/918830/assets/shopee-icon.png?1704690471681"
                                    alt=""
                                    className="social-icon"
                                />
                                </a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div className="child-content row">
                    <div className="col l-8 m-12 c-12">
                        <h4 className="title-tab">Giới thiệu sách</h4>
                        <div className="context">
                        <div className="data">
                            <div className="text">
                            <p style={{ textAlign: "justify" }}>
                                Mạng xã hội trong đó có Instagram, đang ngày trở thành một
                                phần không thể thiếu của lối sống con người hiện đại. Không
                                còn đơn thuần chỉ để giao tiếp và liên lạc, ngày càng nhiều
                                người sử dụng mạng xã hội như một phương tiện nhạy bén để thể
                                hiện bản thân hay quảng bá hình ảnh. Tuy nhiên những hình ảnh
                                đẹp đẽ trên Instagram dường như đang tràn ra khỏi khung hình
                                và xâm chiếm mọi mặt cuộc sống của chúng ta, ngày một mạnh mẽ
                                và thô bạo. Chiêm ngưỡng thế giới rực rỡ mà người khác thuộc
                                về một mặt ta không khỏi nhen nhóm hy vọng mình cũng được là
                                một phần của những hình ảnh đó, mặt khác lại rơi vào hố sâu
                                tuyệt vọng vì hiện thực khắc nghiệt trước mắt khiến điều đó
                                gần như là bất khả.
                            </p>
                            <p style={{ textAlign: "justify" }}>
                                Bắt nguồn từ nỗ lực lý giải khoảng cách kỳ quái giữa thế giới
                                của những hình ảnh đẹp đẽ trong khoảnh khắc và hiện thực vô
                                vọng trải dài ấy, Jeong Jiwoo dấn ngòi bút sâu hơn vào những
                                vấn đề cố hữu nổi cộm trong xã hội hiện đại Hàn Quốc và có lẽ
                                cũng không xa lạ với Việt Nam.
                            </p>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div className="col l-4 m-12 c-12">
                        <div className="book-info">
                        <h2 className="title-tab">Thông tin chi tiết</h2>
                        <ul className="book-info-detail">
                            <li>
                            <span className="span-1">Tác giả</span>
                            <span className="span-2">jeong jiwoo</span>
                            </li>
                            <li>
                            <span className="span-1">Dịch giả</span>
                            <span className="span-2">Vương Thúy Quỳnh Anh</span>
                            </li>
                            <li>
                            <span className="span-1">Nhà xuất bản</span>
                            <span className="span-2">Thông Tấn</span>
                            </li>
                            <li>
                            <span className="span-1">Kích thước</span>
                            <span className="span-2">Đang cập nhật</span>
                            </li>
                            <li>
                            <span className="span-1">Số trang</span>
                            <span className="span-2">Đang cập nhật</span>
                            </li>
                            <li>
                            <span className="span-1">Ngày phát hành</span>
                            <span className="span-2">2024</span>
                            </li>
                        </ul>
                        </div>
                        <div className="related-blog">
                        <h2 className="title-tab">
                            <a href="#" style={{ color: "#228b22" }}>
                            Giới thiệu sách Nhã Nam
                            </a>
                        </h2>
                        <div className="blog-list">
                            <div className="item">
                            <div className="item-blog">
                                <a href="" className="thumb">
                                <img
                                    src="https://bizweb.dktcdn.net/100/363/455/articles/seo-2.png?v=1700487959943"
                                    alt=""
                                    className="img-blog"
                                />
                                </a>
                                <div className="content-blog">
                                <h3>
                                    <a href="">
                                    5 bí quyết dưỡng ẩm đắt giá - Chăm sóc da hiệu quả ngay
                                    trong mùa đông
                                    </a>
                                </h3>
                                <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                                    Thứ Hai, 20/11/2023
                                </span>
                                </div>
                            </div>
                            </div>
                            <div className="item">
                            <div className="item-blog">
                                <a href="" className="thumb">
                                <img
                                    src="https://bizweb.dktcdn.net/100/363/455/articles/seo-1.png?v=1700281321867"
                                    alt=""
                                    className="img-blog"
                                />
                                </a>
                                <div className="content-blog">
                                <h3>
                                    <a href="">
                                    Khám phá bí mật làm thịt lợn quay bì giòn tại gia
                                    </a>
                                </h3>
                                <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                                    Thứ Bảy, 18/11/2023
                                </span>
                                </div>
                            </div>
                            </div>
                            <div className="item">
                            <div className="item-blog">
                                <a href="" className="thumb">
                                <img
                                    src="https://bizweb.dktcdn.net/100/363/455/articles/nha-nam-website-3154da6f-42a3-4ff9-b4c5-f7b217989147.png?v=1699532816857"
                                    alt=""
                                    className="img-blog"
                                />
                                </a>
                                <div className="content-blog">
                                <h3>
                                    <a href="">Những cuốn sách dành cho người hướng nội</a>
                                </h3>
                                <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                                    Thứ Năm, 09/11/2023
                                </span>
                                </div>
                            </div>
                            </div>
                            <div className="item">
                            <div className="item-blog">
                                <a href="" className="thumb">
                                <img
                                    src="https://bizweb.dktcdn.net/100/363/455/articles/ban-do-cf.png?v=1698399264317"
                                    alt=""
                                    className="img-blog"
                                />
                                </a>
                                <div className="content-blog">
                                <h3>
                                    <a href="">
                                    Sự thật ám ảnh về loại cafe đắt nhất thế giới
                                    </a>
                                </h3>
                                <span style={{ fontSize: 14, color: "#7B7B7D" }}>
                                    Thứ Sáu, 27/10/2023
                                </span>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div className="content-3">
                    {/* top content 3*/}
                    <div className="top-content-3">
                        <h1 style={{ fontSize: 28 }}>Có thể bạn cũng thích</h1>
                        <a href="" className="seen-more">
                        <h3 style={{ fontSize: 15 }}>Xem thêm</h3>
                        <i className="fa fa-angle-right" />
                        </a>
                    </div>
                    {/* below content 3 */}
                    <div className="below-content-3">
                        <a href="" className="pic-content-3-hover">
                        <li>
                            <img
                            src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/khong-co-tuyet-vong-tren-instagram-01-e1710474202548.jpg?v=1710474211207"
                            alt="KHÔNG CÓ TUYỆT VỌNG TRÊN INSTAGRAM"
                            title="KHÔNG CÓ TUYỆT VỌNG TRÊN INSTAGRAM"
                            />
                            <div className="buy-cart">
                            <div className="cart">
                                <i className="fa fa-shopping-bag" />
                            </div>
                            <div className="buy">Mua ngay</div>
                            </div>
                        </li>
                        <div className="book-name-price">
                            <h3>KHÔNG CÓ TUYỆT VỌNG TRÊN INSTAGRAM</h3>
                            <div className="price-book">
                            <h3>
                                123.250<u>đ</u>
                            </h3>
                            <del>
                                145.000<u>đ</u>
                            </del>
                            </div>
                        </div>
                        </a>
                        <a href="" className="pic-content-3-hover">
                        <li>
                            <img
                            src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/thuc-hanh-khac-ky-01-e1710211043565.jpg?v=1710211104237"
                            alt="THỰC HÀNH KHẮC KỶ"
                            title="THỰC HÀNH KHẮC KỶ"
                            />
                            <div className="buy-cart">
                            <div className="cart">
                                <i className="fa fa-shopping-bag" />
                                <i className="fas fs-shop" />
                            </div>
                            <div className="buy">Mua ngay</div>
                            </div>
                        </li>
                        <div className="book-name-price">
                            <h3>THỰC HÀNH KHẮC KỶ</h3>
                            <div className="price-book">
                            <h3>
                                91.800<u>đ</u>
                            </h3>
                            <del>
                                108.000<u>đ</u>
                            </del>
                            </div>
                        </div>
                        </a>
                        <a href="" className="pic-content-3-hover">
                        <li>
                            <img
                            src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/tieng-thet-cam-lang-01-e1710210545189.jpg?v=1710210558077"
                            alt="TIẾNG THÉT CÂM LẶNG"
                            title="TIẾNG THÉT CÂM LẶNG"
                            />
                            <div className="buy-cart">
                            <div className="cart">
                                <i className="fa fa-shopping-bag" />
                                <i className="fas fs-shop" />
                            </div>
                            <div className="buy">Mua ngay</div>
                            </div>
                        </li>
                        <div className="book-name-price">
                            <h3>TIẾNG THÉT CÂM LẶNG</h3>
                            <div className="price-book">
                            <h3>
                                212.500<u>đ</u>
                            </h3>
                            <del>
                                250.000<u>đ</u>
                            </del>
                            </div>
                        </div>
                        </a>
                        <a href="" className="pic-content-3-hover">
                        <li>
                            <img
                            src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/chang-trai-chuyen-kiep-va-co-gai-thien-tai-2-01-e1709006845284.jpg?v=1709006861020"
                            alt="CHÀNG TRAI CHUYỂN KIẾP VÀ CÔ GÁI THIÊN TÀI TẬP 2"
                            title="CHÀNG TRAI CHUYỂN KIẾP VÀ CÔ GÁI THIÊN TÀI TẬP 2"
                            />
                            <div className="buy-cart">
                            <div className="cart">
                                <i className="fa fa-shopping-bag" />
                                <i className="fas fs-shop" />
                            </div>
                            <div className="buy">Mua ngay</div>
                            </div>
                        </li>
                        <div className="book-name-price">
                            <h3>CHÀNG TRAI CHUYỂN KIẾP VÀ CÔ GÁI THIÊN TÀI TẬP 2</h3>
                            <div className="price-book">
                            <h3>
                                114.750<u>đ</u>
                            </h3>
                            <del>
                                135.000<u>đ</u>
                            </del>
                            </div>
                        </div>
                        </a>
                        <a href="" className="pic-content-3-hover">
                        <li>
                            <img
                            src="https://bizweb.dktcdn.net/thumb/large/100/363/455/products/tuoigiarucroe1708260434879.jpg?v=1708261482417"
                            alt="TUỔI GIÀ RỰC RỠ"
                            title="TUỔI GIÀ RỰC RỠ"
                            />
                            <div className="buy-cart">
                            <div className="cart">
                                <i className="fa fa-shopping-bag" />
                                <i className="fas fs-shop" />
                            </div>
                            <div className="buy">Mua ngay</div>
                            </div>
                        </li>
                        <div className="book-name-price">
                            <h3>TUỔI GIÀ RỰC RỠ</h3>
                            <div className="price-book">
                            <h3>
                                254.150<u>đ</u>
                            </h3>
                            <del>
                                299.000<u>đ</u>
                            </del>
                            </div>
                        </div>
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
      
        </>
    )
}

export default Detailpage;