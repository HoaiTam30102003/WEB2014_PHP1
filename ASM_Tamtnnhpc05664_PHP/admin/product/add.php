<?php
include "components/header.php";
include "components/sidebar.php";
?>
<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $category_id = $_POST['category_id'] ?? "";
    $name = $_POST['name'] ?? "";
    $price = $_POST['price'] ?? "";
    $image = save_file('image', $UPLOAD_URL);
    $content = $_POST['content'] ?? "";
    $views = 0;
    $quantity = $_POST['quantity'] ?? '';

    // kt loi ten
    if (empty($name)) {
        $error_name = 'Vui lòng nhập thông tin';
    }
    // lt loi gia
    if (empty($price)) {
        $error_price = "Vui lòng không bỏ trống giá";
    } else {
        $pattern = '/[a-z]/';
        if (preg_match($pattern, $price)) {
            $error_price = 'Giá phải là số';
        }
    }
    
    // kt loi k chon danh muc
    if (empty($category_id)) {
        $error_category = "Vui lòng chọn danh mục";
    }
    // kt loi k nhap content
    if (empty($content)) {
        $error_content = "Không được bỏ trống";
    }
    // kt loi k chon hinh
    if (empty($image)) {
        $error_image = "Vui lòng chọn ảnh";
    }

    if(empty($quantity)){
        $error_quantity = "Vui lòng nhập thông tin";
    }else{
        if(!preg_match('/^\d{1,3}$/', $quantity)){
            $error_quantity = "Vui lòng nhập đúng số lượng";
        }
    }



    // var_dump($name, $price, $image, $category_id, $content);
    if (!isset($error_name) && !isset($error_price) && !isset($error_category) && !isset($error_content) && !isset($error_image) && !isset($error_quantity)) {
        $db = new product();
        $result = $db->getAdd($category_id, $name, $price, $quantity ,$image, $content, $views);
        
        $_SESSION['message'] = "Thêm sản phẩm thành công";
        header('location: index.php?page=listpro');
    }


}
?>

<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Sản Phẩm</h1>
                    </div>

                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <!-- viết code giao diện ở đây -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Thêm Sản Phẩm</h3>
                            </div>
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="category_id">Danh Mục</label>
                                            <select class="form-control" name="category_id">
                                                <option value="">Chọn danh mục</option>
                                                <?php
                                                $db = new category();
                                                $list = $db->getList();
                                                foreach ($list as $item) {
                                                    extract($item);
                                                    echo '<option value="' . $id . '">' . $name . '</option>';
                                                }
                                                ?>

                                            </select>
                                            <?php
                                            if (isset($error_category)) {
                                                echo '<small class="text-danger">' . $error_category . '</small>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="name">Tên Sản Phẩm</label>
                                            <input type="text" class="form-control" name="name">
                                            <?php
                                            if (isset($error_name)) {
                                                echo '<small class="text-danger">' . $error_name . '</small>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="price">Giá</label>
                                            <input type="text" class="form-control" name="price">
                                            <?php
                                            if (isset($error_price)) {
                                                echo '<small class="text-danger">' . $error_price . '</small>';
                                            }
                                            ?>
                                        </div>
                                        
                                        <div class="form-group col-md-6">
                                            <label for="" class="form-label">Số lượng</label>
                                            <input type="text" class="form-control" name="quantity">
                                            <small class="text-danger"><?= $error_quantity ?? '' ?></small>
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="exampleInputFile">Hình Ảnh</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>

                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                            <?php
                                            if (isset($error_image)) {
                                                echo '<small class="text-danger">' . $error_image . '</small>';
                                            }
                                            ?>
                                        </div>
                                        <input type="hidden" name="views" value="0">
                                        <div class="form-group col-12">
                                            <label for="" class="form-label">Mô tả</label>
                                            <textarea name="content" id="summernote" class="form-control" rows="10"></textarea>
                                            <?php
                                            if (isset($error_content)) {
                                                echo '<small class="text-danger">' . $error_content . '</small>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <!-- <input type="submit" class="btn btn-primary" value="Thêm" name="addpro"> -->
                                        <button type="submit" class="btn btn-primary">Thêm</button>
                                        <button type="reset" class="btn btn-primary">Huỷ</button>
                                        <a href="index.php?page=listpro" class="btn btn-primary">Danh Sách</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>

<?php include 'components/footer.php' ?>
