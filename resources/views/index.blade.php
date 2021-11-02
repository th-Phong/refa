<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,700;1,300&display=swap" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css'); }}" type="text/css">
    <title>Refa - Homepage</title>
</head>

<body>
    <header>
        <img src="{{ URL::asset('images/Path1.png'); }}" alt="LogoRefa" class="logo-wed">
    </header>
    <nav>
        <ul class="nav__list">
            <li class="nav__item"><a href="#" class="nav__link">Về Refa</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Sản phẩm</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Đặt hàng</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Blog</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Liên hệ</a></li>
            <li class="nav__item--icon">
                <ul>
                    <li> <a href="#" class="nav__icon--bag">
                            <i class="fas fa-shopping-bag"></i>
                            <span class="nav__icon--bag-notice">3</span>
                        </a></li>
                    <li><a href="#" class="nav__icon--search"><i class="fas fa-search"></i></a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="slide">
        <img src="{{ URL::asset('images/RF_vitalbeauty_KV_CARATRAY-removebg-preview.png'); }}" alt="slide1" class="slide__img">
        <div class="slide__content">
            <img src="{{ URL::asset('images/Path1.png'); }}" alt="LogoRefa" class="slide__logo">
            <span class="slide__slogan">
                Đánh thức
            </span>
            <p class="slide__desc">
                thần sắc rạng ngời
            </p>
        </div>
        <button class="slide__btn slide__btn--left">
            &#60;
        </button>
        <button class="slide__btn slide__btn--right">
            &#62;
        </button>
        <!-- <button class="slide__btn slide__btn--bottom">
            &or;
        </button> -->
        <div class="dots">
            <button class="dots__dot dots__dot--active" data-slide="0"></button>
            <button class="dots__dot" data-slide="1"></button>
            <button class="dots__dot" data-slide="2"></button>
            <button class="dots__dot" data-slide="3"></button>
        </div>
    </div>
    <div class="feature-product">
        <div class="feature-product heading__section">Sản phẩm nổi bật</div>

        <div class="feature-product products">
            <div class=" product-list row">
                <div class="product-item col-xl-4 col-md-4">
                    <img src="{{ URL::asset('images/COMBO 2_Draft.png'); }}" alt="feature-product1" class="product-item__img">
                    <div class="product-item__title">Face massage set</div>
                    <div class="product-item__newprice">12.500.000 vnd</div>
                    <div class="product-item__oldprice">14.000.000 vnd</div>
                </div>
                <div class="product-item col-xl-4 col-md-4">
                    <img src="{{ URL::asset('images/COMBO 1_Draft.png'); }}" alt="feature-product1" class="product-item__img">
                    <div class="product-item__title">Face massage set</div>
                    <div class="product-item__newprice">12.500.000 vnd</div>
                    <div class="product-item__oldprice">14.000.000 vnd</div>
                </div>
                <div class="product-item col-xl-4 col-md-4">
                    <img src="{{ URL::asset('images/COMBO 2_Draft.png'); }}" alt="feature-product1" class="product-item__img img--border">
                    <div class="product-item__title">Face massage set</div>
                    <div class="product-item__newprice">12.500.000 vnd</div>
                    <div class="product-item__oldprice">14.000.000 vnd</div>
                </div>
            </div>
        </div>

        <button class="feature-product btn--shop-now">Đặt hàng nhận ưu đãi</button>
    </div>

    <div class="story">
        <div class="refa-story">
            <img src="{{ URL::asset('images/CAXA_RAY_main_model_2 copy.png'); }}" alt="feature-product1" class="refa-story__img">
            <div class="refa-story__content">
                <div class="refa-story__title">Câu chuyện về Refa</div>
                <p class="refa-story__desc content-desc">Bị cuốn hút bởi những thay đổi này mà trang Bright Gide đã tổng hợp lại những màn cải tạo kinh điển của các vị chủ nhà và cũng xem đâu là sự thay đổi ấn tường nhất</p>
                <a href="#" class="refa-story__link link--detail">Xem thêm</a>
            </div>

        </div>
        <div class="product-story">
            <img src="{{ URL::asset('images/Rectangle 73.png'); }}" alt="cay-lan-message" class="product-story__img">
            <div class="product-story__content">
                <div class="product-story__content-heading">
                    Cây lăn message
                </div>
                <p class="product-story__content-desc content-desc">
                    Bị cuốn hút bởi những thay đổi này mà trang Bright Gide đã tổng hợp lại những màn cải tạo kinh điển của các vị chủ nhà và cũng xem đâu là sự thay đổi ấn tường nhất
                </p>
                <a href="#" class="product-story__content-link link--detail">Xem thêm</a>
            </div>

            <div class="product-story__content">
                <div class="product-story__content-heading">
                    Collagen
                </div>
                <p class="product-story__content-desc content-desc">
                    Bị cuốn hút bởi những thay đổi này mà trang Bright Gide đã tổng hợp lại những màn cải tạo kinh điển của các vị chủ nhà và cũng xem đâu là sự thay đổi ấn tường nhất
                </p>
                <a href="#" class="product-story__content-link link--detail">Coming Soon</a>
            </div>
            <img src="{{ URL::asset('images/RF_vitalbeauty_KV_COLLzzAGEN.png'); }}" alt="cay-lan-message" class="product-story__img">
        </div>
    </div>


    <div class="feedback">
        <div class="feedback__heading heading__section">Trải nghiệm thú vị cùng Refa</div>
        <div class="feedback__content">
            <div class="feedback__item">
                <img src="{{ URL::asset('images/Rectangle 59.png'); }}" alt="img-review-1" class="feedback__item-img">
                <div class="feedback__item-name">Emmi Hoang</div>
                <p class="feedback__item-review">"Tôi dùng Refa mỗi ngày và cảm nhận nếp nhắn được cải thiện rõ rệt</p>
            </div>
            <div class="feedback__item">
                <img src="{{ URL::asset('images/Rectangle 60.png'); }}" alt="img-review-2" class="feedback__item-img">
                <div class="feedback__item-name">Kiên Hoàng</div>
                <p class="feedback__item-review">"Đến nay mình đã có trọn bộ thanh lăn Refa và mình mãn nguyện với điều đó</p>
            </div>
            <div class="feedback__item">
                <img src="{{ URL::asset('images/Rectangle 67.png'); }}" alt="img-review-3" class="feedback__item-img">
                <div class="feedback__item-name">Tyhd Thùy Dương</div>
                <p class="feedback__item-review">"Một phụ kiện mà mình luôn mang theo mọi nơi và không thể thiếu trong túi sách của mình</p>
            </div>
        </div>
        <button class="slide__btn slide__btn--left">
            &#60;
        </button>
        <button class="slide__btn slide__btn--right">
            &#62;
        </button>
        <div class="feedback__dots dots">
            <button class="dots__dot dots__dot--active" data-slide="0"></button>
            <button class="dots__dot" data-slide="1"></button>
            <button class="dots__dot" data-slide="2"></button>
            <button class="dots__dot" data-slide="3"></button>
        </div>
    </div>


    <div class="blog">
        <div class="blog__heading heading__section">Blog</div>

        <div class="blog__news">
            <div class="row">
                <div class="blog__new-main col-xl-7">
                    <img src="{{ URL::asset('images/Rectangle 78.png'); }}" alt="img-main-new" class="blog__new-main-img">
                    <div class="blog__new-main-content">
                        <div class="blog__new-main-heading"><a href="#" class="blog__new-link">Nghịch lý Song Hye Kyo càng già lại càng trẻ, hóa ra là có bi thuật đặc biệt.</a></div>
                        <div class="blog__new-main-time">15:30 25/10/2021</div>
                        <p class="blog__new-main-desc">Song Hye Kyo vốn là tượng đài nhan sắc của làng giải tri Hàn Quốc nói riêng và Châu Á nói chung. Cô cũng là hình mẫu nhan sắc được chị em ưu ái. Hiện tại đẫ ở tuổi U40, nhưng nữ diễn viên vẫn sỡ hữu nhan sắc ngọt ngào trẻ trung mê mẩn.</p>
                    </div>
                </div>
                <div class="blog__new-extra col-xl-5">
                    <div class="blog__new-extra-1 col-xl-12">
                        <img src="{{ URL::asset('images/Rectangle 79.png'); }}" alt="img-main-new" class="blog__new-extra-img extra-1 ">
                        <div class="blog__new-extra-content">
                            <div class="blog__new-extra-heading"><a href="#" class="blog__new-link">Xu hướng này có trở thành cơn ác mộng tiếp theo đối với các thương hiệu xa xỉ ?</a></div>
                            <div class="blog__new-extra-time">15:30 25/10/2021</div>
                        </div>
                    </div>

                    <div class="blog__new-extra-2 col-xl-12">
                        <img src="{{ URL::asset('images/Rectangle 80.png'); }}" alt="img-main-new" class="blog__new-extra-img extra-2 ">
                        <div class="blog__new-extra-content">
                            <div class="blog__new-extra-heading"><a href="#" class="blog__new-link">Kbiz có Jennie là đỉnh nhất, sang Cbiz và Vbiz thì ai xứng danh "Nữ hoàng"</a></div>
                            <div class="blog__new-extra-time">15:30 25/10/2021</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="shop-system">
        <div class="shop-system__heading heading__section">Hệ thống cửa hàng</div>
        <div class="shop-system__content">
            <div class="shop-system__item">
                <img src="{{ URL::asset('images/img_stores.png'); }}" alt="refa-store-1" class="shop-system__item-img">
                <div class="shop-system__item-title">
                    <span class="shop-system__item-number">__ 1</span>
                    <span class="shop-system__item-name">Takashimaya</span>
                </div>
                <p class="shop-system__item-address"><i class="fas fa-map-marker-alt"></i> Tầng trệt, TTTM Takashimaya, 65 Lê Lợi, P. Bến Nghế, Q.1, TP. Hồ Chí Minh </p>
            </div>

            <div class="shop-system__item">
                <img src="{{ URL::asset('images/img_stores.png'); }}" alt="refa-store-2" class="shop-system__item-img">
                <div class="shop-system__item-title">
                    <span class="shop-system__item-number">__ 2</span>
                    <span class="shop-system__item-name">Vạn Hạnh Mall</span>
                </div>
                <p class="shop-system__item-address"><i class="fas fa-map-marker-alt"></i> Cửa hàng Matsomoto KiYoshi - Lầu 2 Vạn Hạnh Mall, 11 Vạn Sư Hạnh, P.12 ,Q.10, TP. Hồ Chí Minh

                </p>
            </div>

            <div class="shop-system__item">
                <div style="position: relative;">
                    <img src="{{ URL::asset('images/z2711556674691_2cea83b8a41c4edf8f1b37fceaf89f5d.png'); }}" alt="refa-store-new" class="shop-system__item-img new-shop">
                    <img src="{{ URL::asset('images/Image 26.png'); }}" alt="refa-store-new" class="sticky-new-shop">
                </div>

                <div class="shop-system__item-title">
                    <span class="shop-system__item-number">__ 3 </span>
                    <span class="shop-system__item-name">Cửa hàng Online Lazada</span>
                </div>
                <p class="shop-system__item-address"><i class="fas fa-location-arrow"></i> Coming soon</p>
            </div>
        </div>
    </div>

    <hr class="line-on-footer" />

    <footer>
        <div class="footer__content row">
            <div class="footer__register-sale col-xl-4">
                <div class="register-sale__heading">Đăng ký nhận thông tin và các chương trình khuyến mãi</div>
                <p class="register-sale__desc">
                    Đăng ký nhận thông tin mới nhất về các sản phẩm của Refa và các chương trình khuyến mãi mới nhất.
                </p>
                <input type="text" name="email" id="email" class="register-sale__input" placeholder="Email đăng ký">
                <div class="register-sale__rules">
                    <i class="fas fa-check-circle"></i>
                    <div class="register-sale__rules-check">
                        Tôi đồng ý nhận thông báo từ Refa, bao gồm các chương trình dành cho các khách hàng thân thiết sự kiện và quà tặng. Tôi đã đọc, hiểu và đồng ý với các điều khoản tại <a href="#" class="register-sale__rules-check-link">Chính sách quyền riêng tư.</a>
                    </div>
                </div>
                <button class="register-sale__button">Đăng ký</button>
            </div>
            <div class="footer__social-network col-xl-3">
                <div class="social-network__heading">
                    Theo dõi Refa trên
                </div>
                <div class="social-network__icon">
                    <a class="social-network__icon-link"> <i class="fab fa-facebook-f"></i></a>
                    <a class="social-network__icon-link"><i class="fab fa-instagram"></i></a>
                    <a class="social-network__icon-link"> <i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="footer__contact-about-license col-xl-5 row">
                <div class="contact-about col-xl-12 row">
                    <div class="contact__link col-xl-6">
                        <div class="contact__link-heading">
                            Liên hệ
                        </div>
                        <div class="contact__link-list">
                            <ul>
                                <li class="contact__link-item">
                                    <a href="#" class="contact__link-link">Bán hàng và đổi trả</a>
                                </li>
                                <li class="contact__link-item">
                                    <a href="#" class="contact__link-link">Cách thức mua hàng</a>
                                </li>
                                <li class="contact__link-item">
                                    <a href="#" class="contact__link-link">Chính sách bảo mật</a>
                                </li>
                                <li class="contact__link-item">
                                    <a href="#" class="contact__link-link">Điều khoản sủ dụng</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="about__link col-xl-6">
                        <div class="about__link-heading">
                            Về Refa
                        </div>
                        <div class="about__link-list">
                            <ul>
                                <li class="about__link-item">
                                    <a href="#" class="about__link-link">Câu chuyện thương hiệu</a>
                                </li>
                                <li class="about__link-item">
                                    <a href="#" class="about__link-link">Dòng sản phẩm</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="footer__license col-xl-12">
                    <p class="license__desc"><i class="far fa-copyright"></i> 2021 Toàn bộ bản quyền thuộc về Refa Việt Nam.</p>
                    <img src="{{ URL::asset('images/image 27.png'); }}" alt="img-refa-license" class="license__icon">
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-to-top">
        <div class="scroll">
            <div class="octagon">
            </div>
            <i class="fas fa-arrow-up octagon-icon"></i>
        </div>
    </div>
</body>

</html>