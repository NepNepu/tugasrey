<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Admin</title>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/lib/w3.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrapcdn/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="<?php echo base_url()?>assets/ajax.googleapis/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/bootstrapcdn/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
		body{
			background-image: url("<?php echo base_url()?>assets/img/c52bd196a5168a307e18308c5edeb0f23b76f862.jpg");
			background-repeat: no-repeat;
			background-position:center;
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
	</style>
	
</head>
<body>
		
		<div class="container" style="margin-top:100px;">
			<h1>EDIT ADMIN</h1>
			<br>
			<div class="row">
			
				<div class="col-md-3">
					

				</div>
				
				<div class="col-md-6">
					
					<?php echo form_open('admin/edit_submit'); ?>
						<?php foreach($data->result_array() as $row)
						{ ?>
							
							<div class="form-group">
							  <label for="usr">Name :</label>
							  <input type="text" class="form-control" id="usr" name="username" value="<?php echo $row['username']; ?>">
							</div>
							
							<div class="form-group">
							  <label for="pwd">Password :</label>
							  <input type="text" class="form-control" id="pwd" name="password" value="<?php echo $row['password']; ?>">
							</div>
							
							<input type="submit" class="btn btn-info" value="Ubah">
							<input type="reset" class="btn btn-danger" value="Batal" onclick="self.history.back()">
							
						<?php } ?>
					<?php echo form_close(); ?>
					
				</div>
				<div class="col-md-3">

				</div>
			
			</div>
		</div>
	
</body>
</html>