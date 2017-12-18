<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quản Lý Bán Hàng</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
    
    <style type="text/css" media="screen">
         #foo {
            color: red;
         }
    </style> 

    <link href="css/foo.css" rel="stylesheet">
    
<link rel="stylesheet" type="text/css" href="css/login.css">
  </head>

  <body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Quản Lí Bán Hàng</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Trang Chủ
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?KHANHHUYEN=SP">Sản Phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?KHANHHUYEN=KM">Khuyến mãi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Liên Hệ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?KHANHHUYEN=DN">Đăng nhập</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?KHANHHUYEN=DK">Đăng ký</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Đăng xuất</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">Hang San Xuat</h1>
          <div class="list-group">
          <?php 
              require_once('dbhelper.php');

              $db = ConnectDatabase();

              $sql = "SELECT * from hangsanxuat";
              $stmt = $db->prepare($sql);
              $stmt->setFetchMode(PDO::FETCH_ASSOC);
              $stmt->execute();
              $resultSet = $stmt->fetchAll();

              foreach ($resultSet as $row)
              {
          ?>

            <a href="index.php?KHANHHUYEN=SP&MaHangSanXuat=<?php echo $row["MaHangSanXuat"]?>" class="list-group-item" id="<?php echo $row["MaHangSanXuat"]?>"><?php echo $row["TenHangSanXuat"]?></a>
          <?php 
            }
          ?>

          </div>

        </div>
        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <?php 

				if(isset($_GET["KHANHHUYEN"])){  // kiểm tra KHANHHUYEN có tồn tại hay không.

					$KHANHHUYEN = $_GET["KHANHHUYEN"]; // nếu có thì gán cho $khanhhuyen

					if($KHANHHUYEN == "DN") // kiểm tra $khanhhuyen có bằng DN hay ko.
			  	{
					  include 'DangNhap.php';  // nếu = thì chạy trang đăng nhập
					}
          else if($KHANHHUYEN == "DK")
          {
            include 'DangKy.php';
          }
          else if($KHANHHUYEN == "SP")
          {
            include'SanPham.php';
          }
          else if($KHANHHUYEN == "KM")
          {
            include'sanphamkhuyenmai.php';
          }
				}
				else
				{
					include 'content.php';  // không thì chạy trang content.s
				}
          
            
          
             ?>
          

            



          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        <div class="row">
        <div class="col-sm-4" id="foo">Công ty....</div>
        <div class="col-sm-4" id="foo">Địa Chỉ:</div>
        <div class="col-sm-4" id="foo">Email</div>
        </div>
      </div>

      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>

</html>