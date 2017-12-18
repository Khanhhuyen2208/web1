<script type="text/javascript">
    function kiemtra()
    {
        //input
        var ht = document.getElementById("HoTen");
        var email = document.getElementById("email");
        var mk = document.getElementById("key");
        var xnmk = document.getElementById("key1");
        
        //Check a
         if(ht.value == '')
        {
            alert('Họ tên');
            ht.focus();
            return false;
        }
        if(email.value == '')
        {
            alert('Nhập vào email');
            email.focus();
            return false;
        }

        if(mk.value == '')
        {
            alert('Mật khẩu');
            mk.focus();
            return false;
        }
        if(xnmk.value == '')
        {
            alert('Xác nhận mật khẩu');
            xnmk.focus();
            return false;
        }
        if(mk.value !=xnmk.value)
        {
            alert('Xác nhận mật khẩu không đúng');
            xnmk.focus();
            return false;
        }
        
        
        return true;
    }
</script>

    	    <div class="col-lg-12">
        	    <div class="form-wrap">
                <h1>Đăng Ký</h1>
                    <form role="form" action="javascript:;" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <h5>Nhập vào họ tên:</h5>
                            <label for="HoTen" class="sr-only">Họ Tên</label>
                            <input type="HoTen" name="HoTen" id="HoTen" class="form-control" placeholder="Họ tên">
                        </div>
                        <div class="form-group">
                            <h5>Nhập vào email:</h5>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <h5>Nhập vào mật khẩu:</h5>
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key" id="key" class="form-control" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <h5>Nhập lại mật khẩu:</h5>
                            <label for="key" class="sr-only">Password</label>
                            <input type="password" name="key1" id="key1" class="form-control" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="checkbox">
                            <span class="character-checkbox" onclick="showPassword()"></span>
                            <span class="label">Hiển thị mật khẩu</span>
                        </div>
                        <input name ="btn-login" onclick ="return kiemtra()" type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Đăng Kí" style="width: 30%;margin: auto;">
                    </form>
                    <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Quên mật khẩu</a>
                    <hr>
        	    </div>
    		</div>