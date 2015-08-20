 <div class="row">
            <div class="">
              <div class="box">
                <div class="box-header with-border pull-right">
                  <h3 class="box-title"><a href="<?php echo site_url('admin/contact/add')?>" class="btn btn-primary">Add</a></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">Id</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Contact Date</th>
                      <th>Action</th>
                    </tr>

                    <?php foreach($contacts->result() as $c){?>
                    <tr>
                      <td><?php echo $c->id?></td>
                      <td><?php echo $c->name?></td>
                      <td>
                        <a href="mailto:<?php echo $c->name?>" target="_blank"><?php echo $c->name?></a>
                      </td>
                      <td><?php echo $c->subject?></td>
                      <td><?php echo $c->added_date?></td>
                      <td><a href="" class="btn btn-success">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                   <?php } //End foreach ?>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">

                <?php echo $this->pagination->create_links()?>
                  
                </div>
              </div><!-- /.box -->