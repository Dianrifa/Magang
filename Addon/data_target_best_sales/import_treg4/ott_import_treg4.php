<?php include_once('../../../header.php'); ?>
    <div>
    <h1>WITEL MATH</h1>
		<h4>
			<small>Tambah Data</small>
			<div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-download-alt"></i> Download Data</a>
				<a href="../data_target_treg4.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
			</div>
		</h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="ott_proses_treg4.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">File Excel</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="import" value="import" class="btn btn-success">
                    </div >
                </form>
            </div>
        </div>
    </div>
<?php include_once('../../../footer.php'); ?>