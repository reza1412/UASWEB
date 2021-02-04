<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">NPM:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="npm" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Nama:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nama" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tempat Lahir:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="tempat_lahir" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Tanggal Lahir:</label>
					</div>
					<div class="col-sm-10">
						<input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="tanggal_lahir">
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
						<input type="text" class="form-control" name="alamat" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Kode Pos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="kode_pos" required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>