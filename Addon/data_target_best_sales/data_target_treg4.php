<?php include_once('../../header.php') ?>
    <div class="box">
        <h1 text-align="center">DATA REAL TREG4</h1>
        <h4>
            Data Target Wifi EXT
            <style>
                h1{margin: auto; width: 400px;}
                .box{margin-bottom: 20px;}
            </style>
            <div class="pull-right">
            <a href="data_target_treg4.php" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="import_treg4/wifiext_import_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
        <form method="post" name="proses">
            <div class="table-responsive">
                <table class="table table-stripped table-bordered table-hover" id="Witel">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_wifiext_treg4") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
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
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus1()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES PLC-->
                <br>
                <br>
                <h4>
                Data Target PLC
                    <div class="pull-right">
                        <a href="data_target_treg4.php" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="import_treg4/plc_import_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="Witel2">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_plc_treg4") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel'] ?></td>
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
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus2()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES OTT-->
                <br>
                <br>
                <h4>
                Data Target OTT
                    <div class="pull-right">
                        <a href="data_target_treg4.php" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="import_treg4/ott_import_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="Witel3">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_ott_treg4") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
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
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus3()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES GAME-->
                <br>
                <br>
                <h4>
                Data Target Game
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="Witel4">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_game_treg4") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
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
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus4()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES MUSIK-->
                <br>
                <br>
                <h4>
                Data Target Musik
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="Witel5">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_musik_treg4") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
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
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus5()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--Data Sales Indihome Smart-->
                <br>
                <br>
                <h4>
                Data Target Indihome Smart
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="Witel6">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_smart_treg4") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
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
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus6()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--Data Sales Indibox-->
                <br>
                <br>
                <h4>
                Data Target Indibox
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="import_treg4/indibox_import_treg4.php" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="Witel7">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_indibox_treg4 ORDER BY nomor ASC") or die(mysqli_error($con));
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
                    <button class="btn btn-danger btn-sm" onclick="hapus7()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--Data Sales Gameqoo-->
                <br>
                <br>
                <h4>
                Data Target Gameqoo
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="Witel8">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
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
                            <th>FY 2021</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_target_gameqoo_treg4") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
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
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus8()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
            </div>
        </form>
        <script>
            $(".check").on('click', function(){
				if($('.check:checked').length == $('.check').length) {
					$('#select_all').prop('checked', true);
				}else{
					$('#select_all').prop('checked', false);
				}
			});
        function hapus1(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        function hapus2(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        function hapus3(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        function hapus4(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        function hapus5(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        function hapus6(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        function hapus7(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete_target_treg4.php'
					document.proses.submit()
				}
		}
        function hapus8(){
				var conf = confirm('Yakin akan menghapus data?');
				if(conf){
					document.proses.action = 'delete.php'
					document.proses.submit()
				}
		}
        </script>
    </div>
<?php include_once('../../footer.php')?>