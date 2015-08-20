<table class="table table-bordered">
                    <tr>
                      <th style="width: 10px">Id</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Logo</th>
                      <th>Added Date</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>

                    <?php foreach($contacts->result() as $c){?>
                    <tr>
                      <td><?php echo $c->id?></td>
                      <td><?php echo $c->name?></td>
                      <td><?php echo $c->price?></td>
                      <td>
                        <?php echo $c->logo?>
                      </td>
                      <td><?php echo $c->added_date?></td>
                      <td><?php echo $c->status?></td>
                      <td><a href="javascript:void(0)" class="btn btn-success edit-course" rel="<?php echo $c->id?>">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
                    </tr>
                   <?php } //End foreach ?>
                  </table>

<script>
 $(".edit-course").on('click',function(){

      var $this=$(this);

      $.get("<?php echo site_url('admin/course/edit')?>/" + $this.prop('rel'),function(data){

        $("#course-modal-title").html("Edit Course");
        $("#course_id").val(data.id);

        $("#course_name").val(data.name);
         $("#course_description").val(data.description);
         $("#course_price").val(data.price);

         if(data.status=="1"){
            $("#course_status").prop('checked',true);
         }
        $("#security_token").val('<?php echo $this->security->get_csrf_token_name()?>');
        $("#course-modal").modal();
      },'JSON');
      
        //$("#course_name").focus();
        return false;
    });    
</script>                