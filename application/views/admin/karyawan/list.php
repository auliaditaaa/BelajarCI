
									
									
<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">

<tbody>
	<?php foreach ($karyawan as $karyawan): ?>
		<tr>
			<td width="150">
				<?php echo $karyawan->id ?>
			</td>
			<td>
				<?php echo $karyawan->nama ?>
			</td>
			<td>
				<?php echo $karyawan->alamat ?>
			</td>
			<td>
				<?php echo $karyawan->telepon ?>
			</td>

										
		</tr>
	<?php endforeach; ?>
</tbody>
</table>
