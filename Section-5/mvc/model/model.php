<?php 
	include 'config/database.php';
	class Model extends Connect {
 		public function getNews() {
 			return 'news get from db';
 		}

 		public function getProductList() {
 			$sql = "SELECT * FROM products";
 			return mysqli_query($this->connect(), $sql);
 		}
	}
?>