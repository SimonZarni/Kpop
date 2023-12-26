<?php
// Start output buffering
include_once __DIR__ . '/layouts/user_navbar.php';
include_once __DIR__ . '/controller/ProductController.php';
include_once __DIR__ . '/controller/CartController.php';

$id = $_GET['id'];
$pro_con = new ProductController();
$products = $pro_con->getGproducts($id);
// die(var_dump($products));

if(isset($_SESSION['id']))
{
  $userId = $_SESSION['id'];

  $cart_controller = new CartController();
  $carts = $cart_controller->getCart($userId);
  
  if (!empty($carts)) {
    foreach ($carts as $cart) {
      $cartLists[] = $cart['product_id'];
    }
  }
}




?>
<!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">


        <div class="heading_container heading_center">
            <h2>
                <?php if (!empty($products)) : ?>
                    Merch of <?= $products[0]['TNAME'] ?>
                <?php else : ?>
                    <h3 class="text-danget text-center vh-100">No merch available at the moment!</h3>
                <?php endif; ?>

            </h2>
        </div>

        <div class="row d-flex flex-wrap justify-content-center">

            <?php foreach ($products as $product) : ?>

                <div class="col-10 col-sm-6 col-lg-3 col-md-4 py-3 d-flex justify-content-center">

                    <div class="card shop_card" style="width: 230px; height:330px;">

                        <img src="uploads/<?php echo $product['image']; ?>" class="card-img-top img-fluid p-3" alt="Image" style="width:230px; height:180px;">

                        <div class="card-body text-center">

                            <h6 class="card-title"><?= $product['name'] ?></h6>
                            <p class="card-text"><strong><?= $product['price'] ?></strong> MMK</p>
                        </div>

                        <div class="d-flex justify-content-center">


                            <?php if (isset($cartLists) && in_array($product['id'], $cartLists)) : ?>
                                <div class="mb-3 px-1 " id='<?php echo $product['id']; ?>'>
                                    <span class="btn btn-dark p-2">Already added</span>
                                </div>

                                <div class="mb-3 px-1 ">
                                    <a href="productDetail.php?productId=<?php echo $product['id']; ?>">
                                        <button class="btn btn-dark">Detail</button>
                                    </a>
                                </div>

                            <?php else : ?>

                                <div class="mb-3 px-1 " id='<?php echo $product['id']; ?>'>
                                    <button class="add_to_cart btn btn-dark">Add To Cart</button>
                                </div>

                                <div class="mb-3 px-1 ">
                                    <a href="productDetail.php?productId=<?php echo $product['id']; ?>">
                                        <button class="btn btn-dark">Detail</button>
                                    </a>
                                </div>

                            <?php endif; ?>

                        </div>

                    </div>

                </div>


            <?php endforeach; ?>


        </div>

    </div>
</section>

<!-- end shop section -->
<?php
include_once __DIR__ . '/layouts/user_footer.php';
?>