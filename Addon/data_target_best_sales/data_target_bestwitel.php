<?php include_once('../../header.php') ?>
    <div class="box">
        <h1 text-align="center">DATA TARGET BEST WITEL KELAS A</h1>
        <!--Sales Wifi Ext-->
        <h4>
            Data Target Musik
            <style>
                h1{margin: auto; width: 800px;}
                .box{margin-bottom: 20px;}
            </style>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
        <form method="post" name="proses">
            <div class="table-responsive"></div>
            <table class="table table-striped table-bordered table-hover" id="Witel">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_musik_kelasa") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
                        <td><?=$data['Produk']?></td>
                        <td><?=$data['Regional']?></td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['Total']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!-- Sales PLC-->
        <br>
        <br>
        <h4>
            Data Target IH Study
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel2">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_ihstudy_kelasa") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Produk']?></td>
                        <td><?=$data['Regional']?></td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['Total']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!--Sales OTT-->
        <br>
        <br>
        <h4>
            Data Target Storage
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel3">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_storage_kelasa") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Produk']?></td>
                        <td><?=$data['Regional']?></td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['Total']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!--Data Sales Game-->
        <br>
        <br>
        <h4>
            Data Target WifiEXT
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel4">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_game_treg4") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['FY_2021']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!--Data Sales Music-->
        <br>
        <br>
        <h4>
            Data Target Addon Gamer
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel5">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_musik_treg4") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['FY_2021']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!--Data Sales Indihome Smart-->
        <br>
        <br>
        <h4>
            Data Target Gamer + Benefit
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel6">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_smart_treg4") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['FY_2021']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!--Data Sales Indibox-->
        <br>
        <br>
        <h4>
            Data Target Indibox
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel7">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_indibox_treg4") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['FY_2021']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!--Data Sales Gameqoo-->
        <br>
        <br>
        <h4>
            Data Target Gameqoo
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel8">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_gameqoo_treg4") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['FY_2021']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
        <!--Data Sales Gameqoo-->
        <br>
        <br>
        <h4>
            Data Target IHSmart
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="import_data_target_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
            <table class="table table-striped table-bordered table-hover" id="Witel9">
                <thead>
                    <tr>
                        <th>
                            <center>
                                <input type="checkbox" id="select_all" value="">
                            </center>
                        </th>
                        <th>Prod</th>
                        <th>Reg</th>
                        <th>Witel</th>
                        <th>JAN</th>
                        <th>FEB</th>
                        <th>MAR</th>
                        <th>APR</th>
                        <th>MEI</th>
                        <th>JUN</th>
                        <th>JUL</th>
                        <th>AGU</th>
                        <th>SEP</th>
                        <th>OKT</th>
                        <th>NOV</th>
                        <th>DES</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
				    $no = 1 ;
					$sql = mysqli_query($con, "SELECT * FROM tb_target_gameqoo_treg4") or die (mysqli_eror($con));
					while($data = mysqli_fetch_array($sql)){ ?>
                    <tr>
                        <td align="center">
						    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
						</td>
						<td><?=$data['Witel']?></td>
                        <td><?= $data['Januari']; ?></td>
                        <td><?= $data['Febuari']; ?></td>
                        <td><?= $data['Maret']; ?></td>
                        <td><?= $data['April']; ?></td>
                        <td><?= $data['Mei']; ?></td>
                        <td><?= $data['Juni']; ?></td>
                        <td><?= $data['Juli']; ?></td>
                        <td><?= $data['Agustus']; ?></td>
                        <td><?= $data['September']; ?></td>
                        <td><?= $data['Oktober']; ?></td>
                        <td><?= $data['November']; ?></td>
                        <td><?= $data['Desember']; ?></td>
                        <td><?= $data['FY_2021']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="box pull-right">
			    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
			</div>
            </div>
        </form>
        <script>
        $(document).ready(function(){
            $('#Witel').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel2').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel3').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel4').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel5').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel6').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel7').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel8').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#Witel9').DataTable({
                columnDefs:[
                    {
                        "searchable":false,
                        "orderable":false,
                        "targets": [0,4]
                    }
                ],
                "order": [1,"asc"]
            });
            $('#select_all').on('click', function(){
				if(this.checked){
					$('.check').each(function(){
					this.checked = true;
				    })
				}else {
					$('.check').each(function(){
					this.checked = false;
					})
				}
			});
            $(".check").on('click', function(){
				if($('.check:checked').length == $('.check').length) {
					$('#select_all').prop('checked', true);
				}else{
					$('#select_all').prop('checked', false);
				}
			})
        });
        function hapus(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        </script>
    </div>
    
<?php include_once('../../footer.php')?>
    