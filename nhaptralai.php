<!DOCTYPE html>
<html lang="en">
<head>
    <title>nhaptralai</title>

    <?php include_once 'partials/head.php'; ?>
</head>

<body>

    <?php include_once 'partials/menuMobile.php'; ?>

    <?php include_once 'partials/scrollTop.php'; ?>

    <?php include_once 'partials/profile.php'; ?>

    <div id="wrapper">
        <?php include_once 'partials/header.php'; ?>

        <?php include_once 'partials/tasks.php'; ?>

        <!-- #content -->
        <div id="content">
            <div class="container-fluid">
                <h3>Nhập trả lại</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div id="sidebar">
                            <div class="sb-heading">
                                <h3 class="title text-uppercase">thông tin phiếu nhập kho</h3>
                                <a href="javascript:;" class="toggle-content" references="#sidebar .sb-content" display="1">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>

                            <div class="sb-content">
                                <div class="form-group">
                                    <input type="date" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Khách hàng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="" id="" class="form-control">
                                        <option value="">Kho hàng</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nhân viên"/>
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="" rows="4" class="form-control" placeholder="Ghi chú"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" class="lineside text-center">
                                        <span class="text">Tiền phải trả</span>
                                    </label>
                                    <ul class="payment">
                                        <li>
                                            <strong>Tổng tiền: </strong>
                                            <span>5,000,000</span>
                                        </li>
                                        <li>
                                            <strong>Chiết khấu: </strong>
                                            <span><input type="text" class="form-control text-right" value="10"/></span>
                                        </li>
                                        <li>
                                            <strong>Phải trả: </strong>
                                            <span>4,500,000</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-group">
                                    <label for="" class="lineside text-center">
                                        <span class="text">Số tiền trả lại khách</span>
                                    </label>
                                    <input type="text" class="form-control text-right" value="15,000,000"/>
                                </div>
                            </div>
                            <div class="sb-footer"></div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="widget">
                            <!-- widget-heading -->
                            <div class="widget-heading">
                                <h1 class="title text-uppercase">Nhập trả lại</h1>
                                <a href="javascript:;" class="toggle-content" references="#nhapkhomua" display="1">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>

                            <div id="nhapkhomua">
                                <!-- widget-tools -->
                                <div class="widget-tools">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form action="" class="form-inline">
                                                <div class="form-group">
                                                    <input type="text" class="form-control input-sm" placeholder="Mã hoặc tên hàng"/>
                                                    <button type="submit" class="btn btn-default input-sm">+</button>

                                                    <span>
                                                        <strong>Mặt hàng: </strong>
                                                        <span>2</span>
                                                    </span>
                                                    <span>|</span>
                                                    <span>
                                                        <strong>Số lượng: </strong>
                                                        <span>11</span>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- <div class="col-sm-5 text-right">
                                            <div class="tool">
                                                <a href="#newProduct" role="button" class="btn btn-sm" data-toggle="modal">
                                                    <i class="fa fa-plus"></i> Thêm mới
                                                </a>
                                            </div>
                                            <div class="tool">
                                                <a href="javascript:;" class="btn btn-sm">
                                                    <i class="fa fa-sign-out"></i> Import
                                                </a>
                                            </div>
                                            <div class="tool">
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                                                        <span class="fa fa-sign-out"></span>
                                                        Export
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Excel</a></li>
                                                        <li><a href="#">PDF</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tool">
                                                <div class="btn-group">
                                                    <button data-toggle="dropdown" class="btn btn-sm dropdown-toggle">
                                                        <span class="fa fa-bars"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Item selected</a></li>
                                                        <li><a href="#">Item selected</a></li>
                                                        <li><a href="#">Item selected</a></li>
                                                        <li><a href="#">Item selected</a></li>
                                                        <li><a href="#">Item selected</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>

                                <!-- widget-content -->
                                <div class="widget-content">
                                    <div class="table-responsive">
                                        <table class="table table-condensed table-default table-bordered table-hover" name="test">
                                            <thead>
                                                <tr class="active">
                                                    <th class="text-center">STT</th>
                                                    <th class="text-center">Mã</th>
                                                    <th>Tên sản phẩm</th>
                                                    <th class="text-center">ĐVT</th>
                                                    <th>Đơn giá</th>
                                                    <th>Số lượng</th>
                                                    <th>Khuyễn mãi</th>
                                                    <th>Thành tiền</th>
                                                    <th class="text-center">HSD</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">SP0123</td>
                                                    <td>Samsung Galaxy S3</td>
                                                    <td class="text-center">Cái</td>
                                                    <td>2,000,000</td>
                                                    <td>100</td>
                                                    <td>5%</td>
                                                    <td>190,000,000</td>
                                                    <td class="text-center">01/12/2019</td>
                                                    <td class="text-center"> ... </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- widget-footer -->
                                <div class="widget-footer">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="pagination">
                                                <li class="active"><a href="#">1</a></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-right">
                                                <a href="#" class="btn btn-default">Lưu lại</a>
                                                <a href="#" class="btn btn-default">Lưu xem trước</a>
                                                <a href="#" class="btn btn-default">Hủy bỏ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#content -->

        <?php include_once 'partials/footer.php'; ?>
    </div>

    <?php include_once 'partials/scripts.php'; ?>
</body>
</html>