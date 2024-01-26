<?php require __DIR__. '/parts/db_connect.php';
$stmt = $pdo->query("SELECT * FROM address_book");
?>
<?php include __DIR__ . '/parts/html-head.php'  ?>
<?php include __DIR__ . '/parts/navbar.php'  ?>
<div class="container">
  <h2>List</h2>
  <pre><?php 
  print_r($stmt->fetch());
  print_r($stmt->fetch());
  print_r($stmt->fetchAll());
  var_dump($stmt->fetch());
  print($stmt->fetch());
  ?></pre>
</div>
<?php include __DIR__ . '/parts/scripts.php'  ?>