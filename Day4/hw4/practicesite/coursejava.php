<?php include_once("header.php");?>
<?php include_once("coursemodals/javamodal/javamodal.php");?>

<div class="page-header">
  <h1>Courses Available For JAVA</h1>
</div>

<div class="pull-right">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span></button>
</div>	

<div>	
	<table class="table table-hover">
		<tr class="active">	
			<th>ID</th>
			<th>Course Name</th>
			<th>Duration</th>
			<th>Amount</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>01</td>
			<td>Basic and Advanced JAVA</td>
			<td>2 months</td>
			<td>Rs. 10000</td>
			<td>Ongoing</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#01"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>02</td>
			<td>Advanced JAVA</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>Ongoing</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#02"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr class="info">
			<td>03</td>
			<td>Servlet and Applet</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>Announced</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#03"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
	</table>
<nav class="pull-right">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

		


<?php include_once("footer.php");?>