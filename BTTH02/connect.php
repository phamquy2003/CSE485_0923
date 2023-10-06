

<?php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=btth01_cse485", "root", "");
} catch (PDOException $e) {
  die("Lỗi kết nối: " . $e->getMessage());
}

?>