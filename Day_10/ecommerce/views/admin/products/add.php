<div class="page-header">
	<h1> Add Product</h1>
</div>	


<form action="index.php?page=admin&m=add" method="post" enctype="multipart/form-data">
  <div class="form-group">
   <label for="product_name">Product Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" required>
  </div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" placeholder="Price" required>
  </div>
  <div class="form-group">
    <label for="iamge">Image</label>
    <input type="file" id="exampleInputEmail1" name="image" placeholder="Email" required>
  </div>
  <div class="form-group">
    <label for="details">Details</label>
    <textarea class="form-control" placeholder="Details" name="details" id="details" required></textarea>
  </div>
  
    <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>