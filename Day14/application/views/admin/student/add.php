
   


    <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Add Students</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
           
              </div>
            </div>
            <div class="box-body">
             	<!-- ======================================== -->
             			<!-- keep your content here-->
             			
                        <form class="col-md-offset-4 col-xs-4" action="#" method="post">
                          <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
                          </div>
                          <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                          </div>
                          <div class="form-group">
                            <label for="last_name">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                          </div>
                          <div class="form-group">
                            <label for="last_name">Contact-no</label>
                            <input type="text" class="form-control" name="contact_no" id="contact_no" placeholder="Contact-no">
                          </div>
                          <div class="form-group">
                            <label for="last_name">Status</label>
                            <div class="radio">
                                <label class="radio-inline">
                                  <input type="radio" name="status" id="active" value="1"> Active
                                </label>
                                <label class="radio-inline">
                                  <input type="radio" name="status" id="inactive" value="0"> Inactive
                                </label>
                            </div>    
                          </div>
                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                          <a href="<?php echo site_url('admin/student/index');?>" class="btn btn-danger">Cancel</a>
                        </form>

             	<!-- ======================================== -->

            </div><!-- /.box-body -->
            <div class="box-footer">
              
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
