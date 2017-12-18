<?php
    
      $db = ConnectDatabase();

      if(isset($_GET["MaHangSanXuat"])){
        $id = $_GET["MaHangSanXuat"];
        $sql = "select * From SanPham where MaHangSanXuat = $id";
      }
      else
      {
        $sql = "select * From SanPham";
      }

            
      $stmt = $db->prepare($sql);
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $stmt->execute();
      $resultSet = $stmt->fetchAll();

      foreach ($resultSet as $row)
      {
?>

<div class="col-lg-4 col-md-6 mb-4">



    <div class="card h-100">
                <a href="#">
                  <img class="card-img-top" src="http://placehold.it/700x400" alt="" style="width: 150px; height: 150px;">
                </a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#"><?php echo $row["TenSanPham"]?></a>
                  </h4>
                  <h5>Giá:</h5>
                  <p class="card-text">Cấu hình mạnh, Khó hư, Đẹp, Xinh, gớm, dể thương, ddien này</p>
                </div>
                <div class="card-footer">
                  <div class="row">
                    <div class="col-sm-6"><p style="font-size: 100%;">Bán: 1000</p>
                    </div>
                    <div class= "col-sm-6"><p style="font-size: 100%;">Xem : 2</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;&#9734;</small>
                </div>
              </div>


            </div>

            <?php
                }
            ?>
        