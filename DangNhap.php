
<?php 
if(isset($_GET["check"])){
    if($_GET["check"] == 1)
    {
?>
        <h3>Đăng nhập thành công</h3>
<?php
    }
    else{
?>
        <h3 style="color: red;">Đăng nhập thất bại, vui lòng đăng nhập lại</h3>

        <div class="col-lg-12">
                <div class="form-wrap">
                <h1>Đăng Nhập</h1>
                    <form role="form" action="kiemtradangnhap.php" method="post" id="login-form" autocomplete="on">
                        <div class="form-group">
                            <h5>Nhập vào email:</h5>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <h5>Nhập vào mật khẩu:</h5>
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="mật khẩu">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Hiện thị mật khẩu</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Đăng Nhập" style="width: 30%;margin: auto;">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Quên mật khẩu</a>
                    <hr>
                </div>
            </div>
<?php
    }
}
else
{
?>
    <div class="col-lg-12">
                <div class="form-wrap">
                <h1>Đăng Nhập</h1>
                    <form role="form" action="kiemtradangnhap.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <h5>Nhập vào email:</h5>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <h5>Nhập vào mật khẩu:</h5>
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="mật khẩu">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Hiện thị mật khẩu</span>
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Đăng Nhập" style="width: 30%;margin: auto;">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Quên mật khẩu</a>
                    <hr>
                </div>
            </div>
<?php
}
?>