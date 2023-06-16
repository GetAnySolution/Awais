<?php include 'header.php';

$products = "SELECT `img`,`products`.`name` as `productName` ,`products`.`id` as `productID` , `catid`,
`categories`.`name` as `categoryName` ,`createdAt`, `inStock`, `price`,
 `products`.`status` as `productStatus` , `categories`.`status`as `categoryStatus`
FROM `products` INNER JOIN `categories` ON `products`.`catid` = `categories`.`id`";
$res = mysqli_query($conn, $products);



?>


<!-- main -->
<main class="main-content-wrapper">
  <div class="container">
    <div class="row mb-8">
      <div class="col-md-12">
        <!-- page header -->
        <div class="d-md-flex justify-content-between align-items-center">
          <div>
            <h2>Products</h2>
            <!-- breacrumb -->
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products </li>
              </ol>
            </nav>
          </div>
          <!-- button -->
          <div>
            <a href="add-product.php" class="btn btn-primary">Add Product</a>
          </div>
        </div>
      </div>
    </div>
    <!-- row -->
    <div class="row ">
      <div class="col-xl-12 col-12 mb-5">
        <!-- card -->
        <div class="card h-100 card-lg">
          <div class="px-6 py-6 ">
            <div class="row justify-content-between">
              <!-- form -->
              <div class="col-lg-4 col-md-6 col-12 mb-2 mb-lg-0">
                <form class="d-flex" role="search">
                  <input class="form-control" type="search" id="searchProduct" placeholder="Search Products" aria-label="Search">
                </form>
              </div>
              <!-- select option -->
              <div class="col-lg-2 col-md-4 col-12">
                <select class="form-select">
                  <option selected>Status</option>
                  <option value="1">Active</option>
                  <option value="2">Deactive</option>
                  <option value="3">Draft</option>
                </select>
              </div>
            </div>
          </div>
          <!-- card body -->
          <div class="card-body p-0">
            <!-- table -->
            <div class="table-responsive">
              <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                <thead class="bg-light">
                  <tr>
                    <th>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkAll">
                        <label class="form-check-label" for="checkAll">

                        </label>
                      </div>
                    </th>
                    <th>Image</th>
                    <th>Proudct Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Create at</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody id="tableBody">
                  <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                    <tr>

                      <td>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="productOne">
                          <label class="form-check-label" for="productOne">

                          </label>
                        </div>
                      </td>
                      <td>
                        <a href="#!"> <img src="../assets/images/products/<?php echo $row['img'] ?>" alt="" class="icon-shape icon-md"></a>
                      </td>
                      <td><a href="#" class="text-reset"><?php echo $row['productName'] ?></a></td>
                      <td><?php echo $row['categoryName'] ?></td>

                      <td>
                        <?php if ($row['inStock'] == 1 and $row['productStatus'] == 1) {

                          echo "  <span class='badge bg-light-primary text-dark-primary'>Active</span>";
                        } elseif (!$row['inStock'] == 1 and $row['productStatus'] == 1) {


                          echo "  <span class='badge bg-light-warning text-dark-warning'>Out of Stock</span>";
                        } else {

                          echo "  <span class='badge bg-light-danger text-dark-danger'>Deactive</span>";
                        } ?>

                      </td>
                      <td><?php echo $row['price'] ?></td>
                      <td><?php echo $row['createdAt'] ?></td>
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
                    </tr>

                  <?php } ?>



                </tbody>
              </table>

            </div>
          </div>
          <div class=" border-top d-md-flex justify-content-between align-items-center px-6 py-6">
            <span>Showing 1 to 8 of 12 entries</span>
            <nav class="mt-2 mt-md-0">
              <ul class="pagination mb-0 ">
                <li class="page-item disabled"><a class="page-link " href="#!">Previous</a></li>
                <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                <li class="page-item"><a class="page-link" href="#!">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>

      </div>

    </div>
  </div>
</main>

</div>


<!-- Libs JS -->
<script src="../assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="../assets/js/theme.min.js"></script>

</body>


<script>
  $(document).ready(function() {

    $('#searchProduct').on('keyup', function() {

      searchPro = $(this).val();
      // console.log(searchPro);


      $.ajax(

        {
          url: "ajax-search.php",
          type: "POST",
          data: {
            searchProduct: searchPro
          },
          success: function(data) {


            $("#tableBody").html(data)



          }




        }


      )



    })







  })
</script>


<!-- Mirrored from freshcart.codescandy.com/dashboard/products.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Mar 2023 10:11:08 GMT -->

</html>