<pre>
<?php include 'pages/config.php';
     $products = "SELECT `img`,`products`.`name` as `productName` ,
     `categories`.`name` as `categoryName` 
       FROM `products` INNER JOIN `categories` ON `products`.`catid` = `categories`.`id`";
          $res = mysqli_query($conn, $products);





          while ($row = mysqli_fetch_assoc($res)) {


print_r($row);

          }

?>
          </pre>