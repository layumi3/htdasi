<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url().'asset/theme/bootstrap.css'?>"/>
</head>
<body>
<div align="center">
<?php
echo form_open_multipart('c_sembako/do_upload');
?>
<table>
<tr>
	<td>Deskripsi Tugas </td>
	<td>:</td>
	<td><input type="text" name="deskripsi" /></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="file" name="userfile" size="20" /></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><input type="submit" value="upload" /></td>
</tr>
</table>
</form>
<h2>DAFTAR TUGAS</h2>
<table border="1">
	<tr bgcolor="#0033ff">
		<td> Nama Tugas </td>
		<td> Nama File</td>
		<td> Tanggal Upload </td>
		<!--<td> File Gambar</td>-->
	</tr>
	<?php 
	foreach($list_unggah->result()as $row){
	?>
	<tr>
		<td><?php echo $row->judul;?> </td>
		<td><a href="<?php echo base_url();?>uploads/<?php echo $row->file;?>">
		<?php echo $row->file?></a></td>
		<!--<td>
		<img src="<?php// echo base_url(); echo $row->filegambar; ?>" height=150px; width=200px; >
		</td>-->
		<td><?php echo $row->tanggal;?> </td>
	</tr>
	<?php } ?>
</table>
</div>
</body>
</html>