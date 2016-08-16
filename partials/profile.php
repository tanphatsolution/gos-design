<!-- Update profile -->
<div id="profile" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">THÔNG TIN TÀI KHOẢN</h4>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <label for="username" class="col-sm-3">Tài khoản</label>
                        <div class="col-sm-9">
                            <input type="text" id="username" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3">Họ tên</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-3">Giới tính</label>
                        <div class="col-sm-9">
                            <select name="gender" id="gender" class="form-control">
                                <option value=""> Chưa xác định </option>
                                <option value=""> Nam </option>
                                <option value=""> Nữ </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-sm-3">Điện thoại</label>
                        <div class="col-sm-9">
                            <input type="text" id="phone" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3">Địa chỉ</label>
                        <div class="col-sm-9">
                            <input type="text" id="address" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role_id" class="col-sm-3">Quyền quản trị</label>
                        <div class="col-sm-9">
                            <select name="role_id" id="role_id" class="form-control">
                                <option value=""> Administrator </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="avatar" class="col-sm-3">Ảnh đại diện</label>
                        <div class="col-sm-9">
                            <input type="file" id="avatar"/>

                            <div style="margin-top: 7px;">
                                <img src="/public/assets/img/noavatar.png" alt="AVATAR" style="width: 100px; height: 100px;" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
                <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
        </div>
    </div>
</div>

<!-- Change password -->
<div id="password" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">ĐỔI MẬT KHẨU</h4>
            </div>
            <div class="modal-body">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <label for="" class="col-sm-3">Mật khẩu cũ</label>
                        <div class="col-sm-9">
                            <input type="password" id="" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3">Mật khẩu mới</label>
                        <div class="col-sm-9">
                            <input type="password" id="" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-3">Xác nhận MK</label>
                        <div class="col-sm-9">
                            <input type="password" id="" class="form-control"/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Hủy bỏ</button>
                <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
        </div>
    </div>
</div>