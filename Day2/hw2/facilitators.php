<?php include("header.php"); ?>
<?php include("facilitators/facilitatorsmodal.php") ?>

<div class="page-header">
  <h1>List of Facilitators</h1>
</div>

<div class="pull-right">
	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add"><span class="glyphicon glyphicon-plus"></span></button>
</div>	

<div>	
	<table class="table table-hover table-striped">
		<tr class="active">	
			<th>ID</th>
			<th>Name</th>
			<th>Field</th>
			<th>Action</th>
		</tr>
		<tr>
			<td>01</td>
			<td>Ram Shah</td>
			<td>Python</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#01"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>02</td>
			<td>Sita Malla</td>
			<td>Ruby</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#02"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>03</td>
			<td>Shyam Raj</td>
			<td>PHP and JS</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#03"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>04</td>
			<td>Gopal Hari</td>
			<td>ASP.NET</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#04"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>05</td>
			<td>Hari Gopal</td>
			<td>JAVA</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#05"><span class="glyphicon glyphicon-info-sign"></span></a>
			</td>
		</tr>
		<tr>
			<td>06</td>
			<td>Ram Hari</td>
			<td>Perl</td>
			<td>
				<a href="#" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="#" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
				<a href="#" role="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#06"><span class="glyphicon glyphicon-info-sign"></span></a>
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


<?php include("footer.php"); ?>