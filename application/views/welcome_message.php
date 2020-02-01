<div class="container">
<a href="welcome/form" class="btn btn-info btn-lg fa fa-plus"> Add Data
</a>

<table class="table table-success" style="margin:20px auto;">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nama Panjang</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Kategori</th>
			<th>Member</th>
			<th>Aksi</th>

		</tr>
		<?php 
		$no = 1;
		foreach($person as $p){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $p->firstname ?></td>
			<td><?php echo $p->lastname ?></td>
			<td><?php echo $p->gender ?></td>
			<td><?php echo $p->birth ?></td>
			<td><?php echo $p->category ?></td>
			<td><?php echo $p->membership ?></td>
			<td>
		 <a type="button" class="btn btn-danger btn-lg fa fa-trash" href="<?= base_url('welcome/deldata'); ?>?birth=<?= $p->birth ?>" onclick="return confirm('Are You Sure?')"></a></td>
   
			
		</tr>
		<?php } ?>
	</table>
	</div>

	
