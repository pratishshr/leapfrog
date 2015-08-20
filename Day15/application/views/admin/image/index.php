 <div class="row">
            <div class="">
              <div class="box">
                <div class="box-header with-border pull-right">
                  <h3 class="box-title"><a href="<?php echo site_url('admin/image/add')?>" class="btn btn-primary">Add</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">Id</th>
                      <th>Name</th>
                      
                      <th>Added Date</th>
                      <th>Action</th>
                    </tr>

                    <?php foreach($images->result() as $i){?>
                    <tr>
                      <td><?php echo $i->id?></td>
                      <td><a href="<?php echo base_url('uploads/'.$i->image_name)?>" target="_blank"><img src="<?php echo base_url('uploads/thumb/'.$i->image_name)?>"/></a></td>
                      
                      <td><?php echo $i->added_date?></td>
                      <td><a href="" class="btn btn-success">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                   <?php } //End foreach ?>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">

                <?php echo $this->pagination->create_links()?>
                  
                </div>
              </div><!-- /.box -->