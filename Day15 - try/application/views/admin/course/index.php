 <div class="row">
            <div class="">
              <div class="box">
                <div class="box-header with-border pull-right">
                  <h3 class="box-title">
                  <a href="javascript:void(0)" class="btn btn-primary" id="add-course">Add</a>
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div id="course-table"></div>

                </div><!-- /.box-body -->
                <div class="box-footer clearfix">

                <?php echo $this->pagination->create_links()?>
                  
                </div>





<!-- Modal -->
<div class="modal fade" id="course-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<form role="form" id="course-form">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="course-modal-title"></h4>
      </div>
      <div class="modal-body">
                    <div class="form-group">
                      <label for="name">Course Name</label>
                      <input type="text" class="form-control" id="course_name" name="name">
                    </div>
                    <div class="form-group">
                      <label for="name">Course Description</label>
                      <textarea class="form-control" id="course_description" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                      <label for="name">Course Price</label>
                      <input type="number" class="form-control" id="course_price" name="price" required="required">
                    </div>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="status" id="course_status" value="1">Active
                      </label>
                    </div>
      </div>
      <div class="modal-footer">
      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" id="security_token"/>
      <input type="hidden"  id="course_id" name="id">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="save-course" >Save changes</button>
      </div>
    </div>
  </div>
  </form>
</div>
             
</div><!-- /.box -->

<script>

function getCourses(){

  $.get('<?php echo site_url('admin/course/table') ?>',function(data){
    $("#course-table").html(data);

  });

}
$(document).on('ready',function(){

   getCourses();

  
    $("#add-course").on('click',function(){
      $("#course-modal-title").html("Add Course");
      $("#course-form")[0].reset();
$("#security_token").val('<?php echo $this->security->get_csrf_token_name()?>');
        $("#course-modal").modal();
        //$("#course_name").focus();
        return false;
    });

   

    $("#save-course").on('click',function(){

      $.post("<?php echo site_url('admin/course/save')?>",$("#course-form").serialize(),function(data){
        if(data.success){
          $("#course-form")[0].reset();
           getCourses();
        }
        else{
          alert("Unable to save data");
        }

      },'JSON');
      return false;
    });

});
</script>
