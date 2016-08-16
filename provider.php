<!DOCTYPE html>
<html lang="en">
<head>
    <title>provider</title>

    <?php include_once 'partials/head.php'; ?>
</head>

<body>

    <?php include_once 'partials/menuMobile.php'; ?>

    <?php include_once 'partials/scrollTop.php'; ?>

    <?php include_once 'partials/profile.php'; ?>

    <div id="wrapper">
        <?php include_once 'partials/header.php'; ?>

        <?php include_once 'partials/tasks.php'; ?>

        <!-- #newProvider Modal -->
        <div id="newProvider" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Thêm mới nhà cung cấp</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="contacter">
                                        <ul class="list-unstyled">
                                            <li>
                                                <label for="">Người liên hệ</label>
                                                <input type="text" class="form-control"/>
                                            </li>
                                            <li>
                                                <label for="">Email</label>
                                                <input type="text" class="form-control"/>
                                            </li>
                                            <li>
                                                <label for="">Điện thoại</label>
                                                <input type="text" class="form-control"/>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Tên công ty"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="MST"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Địa chỉ"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Fax"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Email"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Thông tin xuất hóa đơn"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6">
                                    <input type="Điện thoại" class="form-control" placeholder="Điện thoại"/>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Ghi chú"/>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-6">
                                    <input type="Điện thoại" class="form-control" placeholder="Website"/>
                                </div>
                                <div class="col-md-6">
                                    <select name="" id="" class="form-control">
                                        <option value="">NCC</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <div class="text-center">
                                        <a href="javascript:;" class="btn btn-primary">Lưu</a>
                                        <a href="javascript:;" class="btn btn-primary">Lưu và thêm mới</a>
                                        <a href="javascript:;" class="btn btn-default" data-dismiss="modal">Hủy</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- #content -->
        <div id="content">
            <div class="container-fluid">
                <h3>Quản lý nhà cung cấp</h3>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="widget">
                            <!-- widget-heading -->
                            <div class="widget-heading">
                                <h1 class="title text-uppercase">Danh sách nhà cung cấp</h1>
                                <a href="javascript:;" class="toggle-content" references="#providerList" display="1">
                                    <i class="fa fa-angle-down"></i>
                                </a>
                            </div>

                            <div id="providerList">
                                <!-- widget-tools -->
                                <div class="widget-tools">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <form action="" class="form-inline">
                                                <div class="form-group">
                                                    <!-- <input type="text" class="form-control input-sm" placeholder="Mã hoặc tên..." /> -->
                                                    <select name="rows" table-name="test" class="form-control input-sm">
                                                        <option value="---">----</option>
                                                        <option value="5">5</option>
                                                        <option value="10">10</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <div class="tool">
                                                <a href="#newProvider" role="button" class="btn btn-sm" data-toggle="modal">
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
                                        </div>
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
                                    <div class="text-right">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                        </ul>
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