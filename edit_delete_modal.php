<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">NPM:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="npm" value="<?php echo $row['npm']; ?>" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tempat Lahir:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row['tempat_lahir']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tanggal Lahir:</label>
					</div>
					<div class="col-sm-10">
						<input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="tanggal_lahir" value="<?php echo $row['tanggal_lahir']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
					<label class="control-label modal-label">Jenis Kelamin:</label></div>
					<div class="col-sm-10">
					 <select class="form-control" name="jenis_kelamin" id="inputGroupSelect01">
						<option selected>Pilih</option>
						<option value="P">Perempuan</option>
						<option value="L">Laki-laki</option>
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Alamat:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Kode Pos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="kode_pos" value="<?php echo $row['kode_pos']; ?>">
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['npm'].' '.$row['nama']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>