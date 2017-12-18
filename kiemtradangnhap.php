<?php 
	if(isset($_POST["email"]) && isset($_POST["key"]))
	{
		try{
			require_once('dbhelper.php');

		    $db = ConnectDatabase();
		    $sql = "SELECT * from taikhoan where TenDangNhap = :TenDangNhap && MatKhau = :MatKhau";
		    $stmt = $db->prepare($sql);
		    $stmt->execute(array(':TenDangNhap'=>$_POST["email"], ':MatKhau'=>$_POST["key"]));
		    $use = $stmt->fetch(PDO::FETCH_ASSOC);
		    
		    if($stmt->rowCount() > 0){
		    	header('Location: index.php?KHANHHUYEN=DN&check=1');
		    }
		    else
		    {
		    	header('Location: index.php?KHANHHUYEN=DN&check=0');
		    }
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}   
	}
	else
		header('Location: index.php?KHANHHUYEN=DN&check=0');

?>