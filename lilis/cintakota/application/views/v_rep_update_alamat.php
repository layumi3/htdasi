<div align="center">
<title>Update Alamat Profil</title>
<h3> UPDATE ALAMAT PROFIL</h3><br>
<?php echo form_open('c_reporter/update_alamat/'.$row_data->username.''); ?>
<table align="center" class="font">

<?php
	$foto=$row_data->gambar;
?><p>
<div class="world-news">
<div class="center">
	<img src="<?php echo base_url().$foto; ?>" class="img-circle" width="320" height="320">
	<tr><p></tr>
	</div>
<table align="center" class="font">
<tr>
<b>
<td>=============</td>
<td>=</td>
<td>==========================================</td>
<td>=====</td></b>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Password </td>
	<td> : </td>
	<td> &nbsp;<?php echo anchor ('c_reporter/edit_pass/'.$row_data->username, '<button type="button" class="btn btn-sm btn-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ubah Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Nama </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'nama','name'=>'nama', 'class'=>'form-control', 'disabled'=>'disabled'),$row_data->nama); ?></td>
	<td> &nbsp;<?php echo anchor ('c_reporter/edit_nama/'.$row_data->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Jenis Kelamin </td>
	<td> : </td>
	<td><select <?php echo form_input(array('id'=>'jk','name'=>'jk', 'class'=>'form-control', 'disabled'=>'disabled' ),$row_data->jk); ?>>
		   <option value="L" <?php if($row_data->jk=='L') echo 'selected' ?>>Laki-Laki</option>
		   <option value="P" <?php if($row_data->jk=='P') echo 'selected' ?>>Perempuan</option>
		</select></td>
		</td><td> &nbsp;<?php echo anchor ('c_reporter/edit_jk/'.$row_data->username, '<button type="button" class="btn btn-sm btn-primary">Ubah</button>'); ?></td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
	<td> Alamat </td>
	<td> : </td>
	<td> <?php echo form_input(array('id'=>'alamat','name'=>'alamat', 'class'=>'form-control'),$row_data->alamat); ?></td>
	</td>
</tr>
<tr>
	<td colspan="3">&nbsp;</td>
</tr>
<tr>
<td> </td><td> </td><br>
	<td><?php echo anchor ('c_reporter/display_form_update/'.$row_data->username, '<button type="button" class="btn btn-sm btn-danger">Batal</button>'); ?>
	<?php echo anchor ('c_berita/update_alamat/'.$row_data->username, '<button type="submit" class="btn btn-sm btn-success">Simpan Perubahan</button>'); ?></td>
</tr>
</table>
</div>
</div>
