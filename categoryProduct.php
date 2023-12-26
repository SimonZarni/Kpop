<?php

include_once __DIR__ . '/layouts/user_navbar.php';
include_once __DIR__ . '/controller/ProductController.php';
include_once __DIR__ . '/controller/CartController.php';

$id = $_GET['id'];

$pro_con = new ProductController();
$products = $pro_con->categoryProducts($id);

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
      <?php if (!empty($products) && isset($products[0]['cat_name'])): ?>
        <h2>
          All Products Of <strong><?php echo $products[0]['cat_name']; ?></strong>
        </h2>
      <?php else: ?>
        <h2>No Products Found</h2>
      <?php endif; ?>
    </div>
    <div class="row">
      <?php foreach ($products as $product) : ?>
        <div class="col-12 col-sm-6 col-lg-3 col-md-4 py-3">
          <div class="card shop_card">
            <img src="uploads/<?php echo $product['image']; ?>" class="card-img-top img-fluid p-3" alt="Image">
            <div class="card-body text-center">
              <h6 class="card-title"><?= $product['name'] ?></h6>
              <p class="card-text"><strong><?= $product['price'] ?></strong> MMK</p>
            </div>
            <div class="d-flex justify-content-center">
              <?php if (isset($cartLists) && in_array($product['id'], $cartLists)) : ?>
                <div class="mb-3 px-1">
                  <span class="btn btn-dark p-2">Already added</span>
                </div>
              <?php else : ?>
                <div class="mb-3 px-1">
                  <button class="add_to_cart btn btn-dark">Add To Cart</button>
                </div>
              <?php endif; ?>
              <div class="mb-3 px-1">
                <a href="productDetail.php?productId=<?php echo $product['id']; ?>">
                  <button class="btn btn-dark">Detail</button>
                </a>
              </div>
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