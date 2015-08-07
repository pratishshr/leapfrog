<div class="page-header">
  <h1> WELCOME TO THIS TEST SHOPPING SITE!</h1>
</div>

<div class="row">
<?php
  foreach($this->productrepository->get_all() as $product){
  
?>
  <div class="col-sm-6 col-md-4 text-center">
    <div class="thumbnail">
      <img src="<?php echo $product->get_image(); ?>"
      <div class="caption">
        <h3><?php echo $product->get_product_name();?></h3>
        <p><?php echo $product->get_details();?></p>
        <p>RS. <?php echo $product->get_price();?></p>
        <p><a href="#" class="btn btn-primary" role="button">Buy Now</a>
      </div>
    </div>
<?php
  }
?>
</div>
