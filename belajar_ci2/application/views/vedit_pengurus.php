<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $judul; ?></title>
</head>
<body>
	<h2><?php echo $isi; ?></h2>
	<?php echo form_open('pengurus/edit_submit'); ?>
	<table>
		<?php foreach($data->result_array() as $row)
			{ ?>
				<tr>
					<td>ID</td>
					<td><input type="number" name="id" value="<?php echo $row['id']; ?>" readonly="yes"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><?php echo form_input('nama', $row['nama']); ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><?php echo form_input('alamat', $row['alamat']) ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><input type="radio" name="gender" value="Pria" <?php if (!(strcmp($row['gender'], "Pria"))) {echo "CHECKED";
					} ?>>Pria</td>
					<td><input type="radio" name="gender" value="Wanita" <?php if (!(strcmp($row['gender'], "Wanita"))) {echo "CHECKED";
					} ?>>Wanita</td>
				</tr>
				<tr>
					<td>Gaji</td>
					<td><?php echo form_input('gaji', $row['gaji']) ?></td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td></td>
					<td><?php echo form_submit('submit', 'Ubah'); ?> <input type="button" value="Batal" onclick="self.history.back()"></td>
				</tr>
			<?php } ?>
	</table>
	<?php echo form_close(); ?>
</body>
</html>