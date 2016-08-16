<!DOCTYPE html>
<html lang="en">
<head>
    <title>customer-congno</title>

    <?php include_once 'partials/head.php'; ?>
</head>

<body>

    <?php include_once 'partials/menuMobile.php'; ?>

    <?php include_once 'partials/scrollTop.php'; ?>

    <div id="wrapper">
        <?php include_once 'partials/header.php'; ?>

        <?php include_once 'partials/tasks.php'; ?>

        <!-- #content -->
        <div id="content">
            <div class="container-fluid">
                <div id="customer">
                    <div class="cus-heading">
                        <h1>THÔNG TIN KHÁCH HÀNG</h1>
                        <input type="text" class="input-sm" value="Nguyễn Xuân Quỳnh"/>
                        <a href="javascript:;" class="btn btn-default btn-sm">Back</a>
                    </div>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="widget">
                                <!-- widget-content -->
                                <div class="widget-content">
                                    <div class="cus-tabs">
                                        <ul class="nav nav-tabs">
                                            <li><a href="customer-info.html">Lịch sử mua hàng</a></li>
                                            <li><a href="customer-chinhanh.html">Chi nhánh</a></li>
                                            <li><a href="customer-nvkd.html">Nhân viên kinh doanh</a></li>
                                            <li class="active"><a href="customer-congno.html">Công nợ</a></li>
                                        </ul>
                                    </div>

                                    <div class="cus-form">
                                        <form action="" class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-sm-4 col-md-3">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Theo chi nhánh</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 col-md-3">
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Theo Gara</option>
                                                        <option value="">Theo Gara</option>
                                                        <option value="">Theo Gara</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4 col-md-6">
                                                    <input type="submit" class="btn btn-info" value="Tìm kiếm"/>
                                                    <input type="reset" class="btn btn-default" value="Hủy bỏ"/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="cus-modal">
                                        <!-- Modal HTML -->
                                        <div id="vouchers" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">
                                                            <span>Danh sách chứng từ</span> |
                                                            <span><small>Khách hàng:</small> Nguyễn Xuân Quỳnh</span> |
                                                            <span><small>Chi nhánh:</small> Hà Nội</span>
                                                        </h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="" class="form-inline">
                                                            <div class="form-group">
                                                                <span>Từ</span>
                                                                <input type="date" class="form-control">
                                                                <span>Đến</span>
                                                                <input type="date" class="form-control">
                                                                <input type="submit" class="btn btn-info" value="Xem"/>
                                                                <input type="reset" class="btn btn-default" value="Hủy"/>
                                                            </div>
                                                        </form>

                                                        <div class="table-responsive">
                                                            <table class="table table-condensed table-default table-bordered table-hover">
                                                                <thead>
                                                                    <tr class="active">
                                                                        <th class="text-center">STT</th>
                                                                        <th class="text-center">Ngày</th>
                                                                        <th>Chứng từ</th>
                                                                        <th class="text-center">Mã</th>
                                                                        <th>Diễn giải</th>
                                                                        <th>Đầu ký</th>
                                                                        <th>Tăng</th>
                                                                        <th>Giảm</th>
                                                                        <th>Cuối kỳ</th>
                                                                    </tr>
                                                                </thead>

                                                                <tbody>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">1</td>
                                                                        <td class="text-center">01/01/2016</td>
                                                                        <td>AB/AB/AB/01/01/01</td>
                                                                        <td>DEF</td>
                                                                        <td>...</td>
                                                                        <td>25</td>
                                                                        <td>7</td>
                                                                        <td>15</td>
                                                                        <td>17</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                        <div class="text-center">
                                                            <ul class="pagination">
                                                                <li class="active"><a href="#">1</a></li>
                                                                <li><a href="#">2</a></li>
                                                                <li><a href="#">3</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="cus-data">
                                        <div class="table-responsive">
                                            <table class="table table-condensed table-default table-bordered table-hover">
                                                <thead>
                                                    <tr class="active">
                                                        <th class="text-center">STT</th>
                                                        <th class="text-center">Ngày mua</th>
                                                        <th class="text-center">Mã hàng hóa</th>
                                                        <th>Tên hàng hóa</th>
                                                        <th class="text-center">Số lượng</th>
                                                        <th>Đơn giá</th>
                                                        <th>Thành tiền</th>
                                                        <th>Mua tại kho</th>
                                                        <th>Nhân viên kinh doanh</th>
                                                        <th>Mã hóa đơn</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>
                                                            <a href="#vouchers" role="button" data-toggle="modal">Xem chứng từ</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">1</td>
                                                        <td class="text-center">11/11/2015</td>
                                                        <td class="text-center">PRO001</td>
                                                        <td>Laptop Dell 001</td>
                                                        <td class="text-center">10</td>
                                                        <td>1,000,000</td>
                                                        <td>10,000,000</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>BILL001</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <!-- widget-footer -->
                                <div class="widget-footer">
                                    <div class="text-center">
                                        <ul class="pagination">
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="widget">
                                <!-- widget-heading -->
                                <div class="widget-heading">
                                    <h3 class="title text-uppercase">Thông tin chung</h3>
                                    <a href="javascript:;" class="toggle-content" references="#userInfo" display="1">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>

                                <!-- widget-content -->
                                <div class="widget-content" id="userInfo">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="cus-info">
                                                <li>
                                                    <strong>Mã khách hàng: </strong>
                                                    <div>KH123456789</div>
                                                </li>
                                                <li>
                                                    <strong>Tên khách hàng: </strong>
                                                    <div>Nguyễn Xuân Quỳnh</div>
                                                </li>
                                                <li>
                                                    <strong>Loại khách hàng: </strong>
                                                    <div>VIP</div>
                                                </li>
                                                <li>
                                                    <strong>CMND: </strong>
                                                    <div>145 771 835</div>
                                                </li>
                                                <li>
                                                    <strong>Công nợ hiện tại: </strong>
                                                    <div>1.000.000</div>
                                                </li>
                                                <li>
                                                    <strong>Địa chỉ: </strong>
                                                    <div>Xuân Quan - Văn Giang - Hưng Yên</div>
                                                </li>
                                                <li>
                                                    <strong>Email: </strong>
                                                    <div>nguyenxuanquynh2210vghy@gmail.com</div>
                                                </li>
                                                <li>
                                                    <strong>Điện thoại: </strong>
                                                    <div>0977.936.507</div>
                                                </li>
                                                <li>
                                                    <strong>Chi chú: </strong>
                                                    <div>HTML forms are the integral part of the web pages and applications, but styling the form controls manually one by one with CSS are often boring and tedious. Bootstrap greatly simplifies the process of styling and alignment of form controls like labels, input fields, selectboxes, textareas, buttons, etc. through predefined set of classes.</div>
                                                </li>
                                                <li>
                                                    <strong>Ảnh đại diện: </strong>
                                                    <div style="float: left; width: 100px; height: 100px;">
                                                        <img src="assets/img/noavatar.png" alt="AVATAR" class="img-responsive"/>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="widget">
                                <!-- widget-heading -->
                                <div class="widget-heading">
                                    <h3 class="title text-uppercase">Thông tin công ty</h3>
                                    <a href="javascript:;" class="toggle-content" references="#companyInfo" display="1">
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>

                                <!-- widget-content -->
                                <div class="widget-content" id="companyInfo">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="cus-info">
                                                <li>
                                                    <strong>Tên công ty: </strong>
                                                    <div>Công ty TNHH một hành viên XYZ</div>
                                                </li>
                                                <li>
                                                    <strong>MST: </strong>
                                                    <div>123 123 123 123 123</div>
                                                </li>
                                                <li>
                                                    <strong>FAX: </strong>
                                                    <div>0123 123 123</div>
                                                </li>
                                                <li>
                                                    <strong>Đi động: </strong>
                                                    <div>123 123 123 </div>
                                                </li>
                                                <li>
                                                    <strong>Máy bàn: </strong>
                                                    <div>234 234 234</div>
                                                </li>
                                                <li>
                                                    <strong>Email: </strong>
                                                    <div>tanphat@gmail.com</div>
                                                </li>
                                                <li>
                                                    <strong>Website: </strong>
                                                    <div>http://tanphat.vn/</div>
                                                </li>
                                                <li>
                                                    <strong>Loại công ty: </strong>
                                                    <div>Công ty cổ phần thương mại</div>
                                                </li>
                                                <li>
                                                    <strong>Chi chú: </strong>
                                                    <div>If you see the output of the above example in a laptop or desktop having screen or viewport width greater than or equal to 992px and less than 1200px you will find it has 4 rows where each row has 3 equal columns resulting in 3x4 grid layout.
                                                    But just wait, the above example has a major alignment issue. If height of any column is taller than the other it doesn't clear properly and break the layout. To fix this, use the combination of a .clearfix class and the responsive utility classes.</div>
                                                </li>
                                            </ul>
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