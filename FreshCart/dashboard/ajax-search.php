<?php
include 'config.php';

$search = $_POST['searchProduct'];

$products = "SELECT `img`,`products`.`name` as `productName` ,`products`.`id` as `productID` , `catid`,
`categories`.`name` as `categoryName` ,`createdAt`, `inStock`, `price`,
 `products`.`status` as `productStatus` , `categories`.`status`as `categoryStatus`
FROM `products` INNER JOIN `categories` ON `products`.`catid` = `categories`.`id` 
WHERE `products`.`name` LIKE '%$search%' ";
$res = mysqli_query($conn, $products);
$output = "";

while ($row = mysqli_fetch_assoc($res)) { 

    $output .=
 '   <tr>

      <td>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="productOne">
          <label class="form-check-label" for="productOne">

          </label>
        </div>
      </td>
      <td>
        <a href="#!"> <img src="../assets/images/products/'.$row["img"].' " alt="" class="icon-shape icon-md"></a>
      </td>
      <td><a href="#" class="text-reset">'.$row["productName"].'</a></td>
      <td>'.$row["categoryName"].'</td>

      <td>';
      if ($row['inStock'] == 1 and $row['productStatus'] == 1) {

        $output .=   "<span class='badge bg-light-primary text-dark-primary'>Active</span>";
        } elseif (!$row['inStock'] == 1 and $row['productStatus'] == 1) {


            $output .= "  <span class='badge bg-light-warning text-dark-warning'>Out of Stock</span>";
        } else {

            $output .="  <span class='badge bg-light-danger text-dark-danger'>Deactive</span>";
        } 

$output .= ' </td>
      <td>'.$row["price"].'</td>
      <td>'.$row["createdAt"].'</td>
      <td>
        <div class="dropdown">
          <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="feather-icon icon-more-vertical fs-5"></i>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-3"></i>Delete</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil-square me-3 "></i>Edit</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>';

}
echo $output;
