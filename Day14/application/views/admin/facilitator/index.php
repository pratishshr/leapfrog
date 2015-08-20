
   


    <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Facilitators Table</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
               
              </div>
            </div>
            <div class="box-body">
             	<!-- ======================================== -->
             			<!-- keep your content here-->
             			<?php
                            if($action == 'deleted'){
                        ?>
                               
                                <div class="alert alert-danger" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    Succesfully deleted!
                                </div>
                        
                        <?php
                            }elseif($action == 'added'){
                        ?>
                                <div class="alert alert-success" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    Succesfully Added!
                                </div>
                        <?php
                            }elseif($action == 'edited'){
                        ?>      

                                <div class="alert alert-info" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                    Succesfully Edited!
                                </div>
                        <?php
                            }
                        ?>         


             			<a href="<?php echo site_url('admin/facilitator/add');?>" class="pull-right btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span></a>
             			<table class="table table-striped table-bordered table-hover">
             				<tr>
             				<th>ID</th>
             				<th>Name</th>
             				<th>Email</th>
             				<th>Contact No</th>
             				<th>Added Date</th>
             				<th>Modified Date</th>
             				<th>Status</th>
             				<th>Action</th>
             				</tr>

             				<?php foreach($facilitators->result() as $fct){ ?>
             			
             				<tr>
             					<td><?php echo $fct->id;?></td>
             					<td><?php echo $fct->first_name;?> <?php echo $fct->last_name;?></td>
             					<td><?php echo $fct->email;?></td>
             					<td><?php echo $fct->contact_no;?></td>
             					<td><?php echo $fct->added_date;?></td>
             					<td><?php echo $fct->modified_date;?></td>
             					<td>
                                <?php if($fct->status == "1"){
                                echo "<span class='label label-success'>Active</span>";
                                }else{
                                echo "<span class='label label-danger'>Inactive</span>";    
                                }
                                ?>
                                </td>
             					<td>
             					<a href="<?php echo site_url('admin/facilitator/edit/'.$fct->id);?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
             					<a href="<?php echo site_url('admin/facilitator/delete/'.$fct->id);?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><span class="glyphicon glyphicon-trash"></span></td>

             				</tr>


             				<?php
             					} //end of foreach 
             				?>	

             			</table>

             	<!-- ======================================== -->

            </div><!-- /.box-body -->
            <div class="box-footer">
              
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
