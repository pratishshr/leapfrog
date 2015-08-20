<form action="" role="form" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                      <label for="name">Image</label>
                      <input type="file" class="form-control" id="image_name" name="image_name">
                    </div>
                    <?php echo $this->upload->display_errors('<p>', '</p>');?>
                    <button type="submit" class="btn btn-primary" name="submit">Upload</button>
</form>