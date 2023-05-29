<pre>
<?php   

include 'config.php';
$products = "SELECT `img`,`products`.`name` as `productName` ,`products`.`id` as `productID` , `catid`,
`categories`.`name` as `categoryName` ,`createdAt`, `inStock`,
 `products`.`status` as `productSatus` , `categories`.`status`as `categoryStatus`

 FROM `products` INNER JOIN `categories` ON `products`.`catid` = `categories`.`id`";
$res = mysqli_query($conn, $products);

while($row = mysqli_fetch_assoc($res)){

print_r($row);


}

?></pre>