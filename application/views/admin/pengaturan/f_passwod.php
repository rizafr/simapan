
<div class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">Ubah Password</a>
		</div>
	</div><!-- /.container -->
</div><!-- /.navbar -->


<?php echo $this->session->flashdata("k_passwod");?>
<div class="well">
	<form action="<?php echo base_URL()?>pengaturan/passwod/simpan" method="post" accept-charset="utf-8" enctype="multipart/form-data">	
		<table class="table-form" width="100%">
			<tr>
				<td width="20%">Username</td>
				<td>
					<input type="text" name="username" class="form-control" readonly value="<?=$this->session->userdata('admin_user')?>" style="width: 200px">
				</td>
			</tr>
			<tr>
				<td>Password lama</td>
				<td>
					<input type="password" name="p1" class="form-control" style="width: 200px" autofocus required></td>
				</tr>
				<tr>
					<td>Password baru</td>
					<td>
						<input type="password" name="p2" class="form-control" style="width: 200px" required>
					</td>
				</tr>
				<tr>
					<td>Ulangi Password baru</td>
					<td>
						<input type="password" class="form-control" name="p3" style="width: 200px" required>
					</td>
				</tr>
			</table>
		</fieldset>
		<div class="row ">
			<div class="col-lg-12">
				<div class="right mt25">
					<a href="<?php echo base_URL(); ?>admin" class="btn btn-success"
						tabindex="11"><i class="icon icon-arrow-left icon-white"></i> Kembali
					</a>
					<button type="submit" class="btn btn-primary" onclick="return confirm('Anda Yakin Akan mengubah Password Anda ?')"><i class="icon icon-ok icon-white"></i> Simpan</button>
				</div>
			</div>
		</div>
	</form>
</div>
