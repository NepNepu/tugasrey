<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/lib/w3.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrapcdn/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="<?php echo base_url()?>assets/ajax.googleapis/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/bootstrapcdn/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		body{
			background-image: url("<?php echo base_url()?>assets/img/fate.png");
			background-repeat: no-repeat;
			background-position:center 0px;
			background-attachment: fixed;
			
		}
		h1{
			font-family:Hobo Std;
			font-size:50px;
			color:white;
			text-align:center;
		}
		label{
			font-family:Andalus;
			font-size:20px;
			color:white;
		}
		th{
			font-family:Andalus;
			font-size:20px;
		}
		td{
			font-family:Comic Sans MS;
			font-size:15px;
		}
	</style>
	
</head>
<body>
	<div class="container" style="margin-top:100px;">
		<h1>ADMIN</h1>
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="margin-top:20px;">Tambah Admin</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content" style="background-color:black;">
					<div class="modal-header">
					  <h4 class="modal-title" style="font-family:Andalus;font-size:20px;color:white;">Data Admin Baru</h4>
					</div>
					<div class="modal-body">
					
						<div  class="row">
		
							<div class="col-md-4">
								<img class="img-responsive" src="<?php echo base_url()?>assets/img/yuudachi_by_vietanhussr-dazyoep.png" width="400px">
							</div>
							
							<div class="col-md-4 utm">
								<br>
								<?php echo form_open('admin/addadmin'); ?>
								
									<div class="form-group">
									  <label for="usr">Username :</label>
									  <input type="text" class="form-control" id="usr" name="username" required="required">
									</div>
									<div class="form-group">
									  <label for="pwd">Password:</label>
									  <input type="password" class="form-control" id="pwd" name="password" required="required">
									</div>
									<br>
									<input type="submit" class="btn btn-info" value="Tambah">
									<input type="reset" class="btn btn-danger" value="Hapus">
								
								<?php echo form_close() ?>
								
								<br>
							</div>
							
							<div class="col-md-4">
								<img class="img-responsive" src="<?php echo base_url()?>assets/img/Welcome_poi_poi.png" width="400px">
							</div>
						
						</div>
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
	</div>


	<div class="container" style="padding-top:30px;">
		
		<div class="row">
		
			<div class="col-md-3">
				

			</div>
			
			<div class="col-md-6">
			
				<table class="table table-hover" style="background-color:white;border:5px solid black;">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Username</th>
						<th>Password</th>
						<th>Option</th>
					  </tr>
					</thead>
					<tbody>
						<?php
						foreach ($data as $row) { ?>
						<tr>
							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td>
								<?php echo anchor('admin/editadmin/'.$row['id'],'UBAH'); ?>
								 | 
								 <?php echo anchor('admin/delete/'.$row['id'],'HAPUS'); ?>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			
			</div>
			
			<div class="col-md-3">

			</div>
		
		</div>
	</div>
	
</body>
</html>