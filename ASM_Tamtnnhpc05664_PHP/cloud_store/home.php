<div class="site-blocks-cover" style="background-image: url(images/obagibanne.jpg);" data-aos="fade">
    <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
            <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                <!-- <h1 class="">Bước đi đẹp hơn, với giày và bản thân hoàn hảo.</h1>
                    <div class="intro-text text-center text-md-left">
                      <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla. </p>
                      <p>
                        <a href="#" class="btn btn-sm btn-primary">Shop Now</a> -->
                </p>
            </div>
        </div>
    </div>
</div>
</div>

<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Miễn phí vận chuyển</h2>
                    <p>Khám phá thế giới mà không phải lo lắng về phí vận chuyển, với dịch vụ miễn phí.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-refresh2"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Trả hàng miễn phí</h2>
                    <p>Trả hàng miễn phí: Không có rủi ro, chỉ có sự thoải mái và sự hài lòng.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-help"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Hỗ trợ khách hàng</h2>
                    <p>Hỗ trợ khách hàng là ưu tiên hàng đầu của chúng tôi - Chúng tôi sẵn lòng giải đáp mọi thắc mắc
                        của bạn.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Sản Phẩm Nổi Bật</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">

                    <?php

                    $db = new product();
                    $restart = $db->getProductTopView();
                    foreach ($restart as $row) {

                        ?>

                        <div class="item ">
                            <div class="block-4 text-center h-100">
                                <figure class="block-4-image">
                                    <img src="../upload/<?= $row['image'] ?>" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#"><?= $row['name'] ?></a></h3>
                                    <p class="mb-0"></p>
                                    <p class="text-primary font-weight-bold"><?= number_format($row['price']) ?> đ</p>
                                </div>
                            </div>
                        </div>

                        <?php
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section block-8">
    <div class="container">
        <div class="row justify-content-center  mb-5">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Giảm giá lớn!</h2>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 mb-5">
                <a href="#"><img src="images/f9f62856100e731442f946cf97b73cbb-1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
            </div>
            <div class="col-md-12 col-lg-5 text-center pl-md-5">
                <h2><a href="#">Giảm 50% cho tất cả sản phẩm</a></h2>
                <p class="post-meta mb-4">Bởi <a href="#">Cloud_Shop</a> <span class="block-8-sep">&bullet;</span> 11,
                    2023</p>
                <p>Cửa hàng này đang có chương trình giảm giá với giá cực kỳ hời. Bạn có thể tìm thấy các sản phẩm chính
                    hãng từ
                    các nhãn hàng lớn như Obagi, Paula's Choice, Innisfree, Simple,... với mức giảm giá
                    lên tới 50%1.</p>
                <p><a href="#" class="btn btn-primary btn-sm">Mua ngay</a></p>
            </div>
        </div>
    </div>
</div>