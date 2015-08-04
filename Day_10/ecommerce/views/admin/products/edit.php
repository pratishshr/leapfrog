<div class="page-header">
	<h1> Edit Product</h1>
</div>	


<form action="index.php?page=admin&m=edit" method="post" enctype="multipart/form-data">
  <div class="form-group">
   <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" value="<?php echo $product->get_product_name();?>" required>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="<?php echo $product->get_price();?>" required>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" id="exampleInputEmail1" name="image" value="<?php echo $product->get_image();?>" required>
  </div>
  <div class="form-group">
    <label for="details">Details</label>
    <textarea class="form-control" placeholder="Details" name="details" id="details" required><?php echo $product->get_details();?></textarea>
  </div>
    <input type="hidden" name="id" value="<?php echo $product->get_id();?>">
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>