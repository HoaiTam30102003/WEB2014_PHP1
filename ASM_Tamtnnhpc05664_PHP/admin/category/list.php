<?php
include "components/header.php";
include "components/sidebar.php";
?>

    <div class="wrapper">
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Loại hàng hóa</h1>
                        </div>
                    </div>
                </div>
            </div>
            <section class="content">
                <div class="container-fluid">
                    <!-- viết code giao diện ở đây -->
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <?php
                            if (isset($_SESSION['error'])) {
                                $message_err = $_SESSION['error'];
                                unset($_SESSION['error']);
                            }
                            if (isset($_SESSION['message'])) {
                                $message = $_SESSION['message'];
                                unset($_SESSION['message']);
                            }
                            if (isset($message_err))
                                echo '
                                    <div class="alert alert-danger" role="alert">
                                        ' . $message_err . '
                                    </div>';
                            if (isset($message))
                                echo '
                                    <div class="alert alert-success" role="alert">
                                        ' . $message . '
                                    </div>';
                            ?>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Bảng danh mục</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <div class="input-group-append">
                                                <a href="index.php?page=addcategory" class="btn btn-primary">
                                                    Thêm Mới
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0" style="height: 470px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Tên danh mục</th>
                                            <th></th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $db = new category();
                                        $add = $db->getList();
                                        foreach ($add as $key => $list) {          
                                            extract($list);
                                            echo '
                                                    <tr>
                                                    <td>' .($key+1) . '</td>
                                                    <td>' . $name . '</td>
                                                    <td>
                                                    <a href="index.php?page=editcategory&id=' . $id . '" class="btn btn-primary">Sửa</a>
                                                    <a onclick="return confirm(`Bạn có chắc muốn xóa không?`);" href="index.php?page=delcategory&id=' . $id . '" type="button" class="btn btn-danger">Xóa</a>
                                                    </td>
                                                    
                                                    
                                                    
                                                    
                                                    </tr>
                                                ';


                                        }

                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
            </section>
        </div>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>
<?php include 'components/footer.php' ?>

<script>
    setTimeout(function() {
        let show =  document.getElementById('showError');

        if (show) {
        show.style.display = 'none';
    }
    }, 4000);
    
</script>