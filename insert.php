<?php 

    require "connection.php";

$ins="INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'bread', '3DcAM01', 'product-images/bread.jpg', 30.00),
(2, 'butter', '3DcAM02', 'product-images/butter.jpg', 50.00),
(3, 'cheese', '3DcAM03', 'product-images/cheese.jpg', 50.00),
(4, 'egg', '3DcAM04', 'product-images/egg.jpg', 10.00),
(5, 'flour', '3DcAM05', 'product-images/flour.jpg', 400.00),
(6, 'honey', '3DcAM06', 'product-images/honey.jpg', 200.00),
(7, 'milk', '3DcAM07', 'product-images/milk.jpg', 100.00),
(8, 'oil', '3DcAM08', 'product-images/oil.jpg', 150.00),
(9, 'pepper', '3DcAM09', 'product-images/pepper.jpg', 100.00),
(10, 'rice', '3DcAM010', 'product-images/rice.jpg', 150.00),
(11, 'salt', '3DcAM011', 'product-images/salt.jpg', 50.00),
(12, 'sugar', '3DcAM012', 'product-images/suger.jpg', 100.00),
(13, 'Tomato', '3DcAM016', 'product-images/product-5.jpg', 80.00),
(14, 'Brockli', '3DcAM017', 'product-images/product-6.jpg', 120.00),
(15, 'Carrot', '3DcAM018', 'product-images/product-7.jpg', 80.00),
(16, 'Fruit Juices', '3DcAM020', 'product-images/product-10.jpg', 220.00)";
$result=mysqli_query($connection,$ins);
if($result){
	header('location:index.php');}
	else{
		echo "error:".mysqli_error($connection);
}




?>