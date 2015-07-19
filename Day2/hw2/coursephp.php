<?php include_once("header.php");?>
<?php include_once("coursemodals/phpmodal/phpmodal.php");?>

<div class="page-header">
  <h1>Courses Available For PHP</h1>
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
			<td>HTML, CSS and Core PHP</td>
			<td>2 months</td>
			<td>Rs. 10000</td>
			<td>Ongoin</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#01"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr class="danger">
			<td>02</td>
			<td>Advanced PHP</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>On Halt</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#02"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>03</td>
			<td>PHP & JS</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>Ongoing</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#03"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>04</td>
			<td>OOP with MVC</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>Ongoing</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#04"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>05</td>
			<td>CodeIgnitor</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>Ongoing</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#05"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr class="info">
			<td>06</td>
			<td>Zend</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>Announced</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#06"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr class="info">
			<td>07</td>
			<td>Laravel</td>
			<td>2 months</td>
			<td>Rs. 15000</td>
			<td>Announced</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#07"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
	</table>
</div>

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