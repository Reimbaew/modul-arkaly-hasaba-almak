<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body> 
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">PHP Modal PDO</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-2"></div>
		<div class="col-md-8">
		
			<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus">

			</span> Hasaba al</button>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>Adyňyz</th>
						<th>Familýaňyz</th>
						<th>Ýaşyňyz</th>
					</tr>
				</thead>
				<tbody>
					<?php
							require_once 'conn.php';
	
							$sql = "SELECT * FROM `user`";
							$query = $conn->prepare($sql);
							$query->execute();
							
							while($fetch = $query->fetch()){
					?>
				
					<tr>
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						<td><?php echo $fetch['age']?></td>
					</tr>
					
					<?php
						}
					?>
				</tbody>
			</table>
		</div>	
	</div>
	
	<div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="save_user.php">
					<div class="modal-header">
						<h3 class="modal-title">Hasaba almak</h3>
					</div>
					<div class="modal-body">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<div class="form-group">
								<label>Adyňyz</label>
								<input type="text" name="firstname" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Familýaňyz</label>
								<input type="text" name="lastname" class="form-control" required="required" />
							</div>
							<div class="form-group">
								<label>Ýaşyňyz</label>
								<input type="number" name="age" class="form-control" min="0" max="2" required="required" />
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Saklamak</button>
						<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Ýok</button>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<script src="js/jquery-3.2.1.min.js"></script>	
<script src="js/bootstrap.js"></script>	
</body>
</html>
