<?php include_once('../../header.php') ?>
    <div class="box">
        <h1 text-align="center">DATA REAL BEST WITEL KELAS A</h1>
        <h4>
            Data Real Gamer
            <style>
                h1{margin: auto; width: 700px;}
                .box{margin-bottom: 20px;}
            </style>
            <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
        <form method="post" name="proses">
            <div class="table-responsive">
                <table class="table table-stripped table-bordered table-hover" id="real_gamer_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_gamer_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES PLC-->
                <br>
                <br>
                <h4>
                Data Real Add On Gamer
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_addongamer_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_addongamer_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES OTT-->
                <br>
                <br>
                <h4>
                Data Real Gamer + Addon 
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_gamerplusaddon_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_gamerplusaddon_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES GAME-->
                <br>
                <br>
                <h4>
                Data Real Gameqoo
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_gameqoo_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_gameqoo_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES MUSIK-->
                <br>
                <br>
                <h4>
                Data Real IHSmart
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_ihsmart_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_ihsmart_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES Benefit Game-->
                <br>
                <br>
                <h4>
                Data Real IHStudy
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_ihstudy_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_ihstudy_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES Benefit Game-->
                <br>
                <br>
                <h4>
                Data Real IKonser
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_ikonser_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_ikonser_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES Indibox WMS-->
                <br>
                <br>
                <h4>
                Data Real Musik
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_musik_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_musik_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES Indibox OTT-->
                <br>
                <br>
                <h4>
                Data Real Storage
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_storage_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_storage_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
                <!--SALES Indibox Sales-->
                <br>
                <br>
                <h4>
                Data Real WifiEXT
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_wifiext_kelasa">
                    <thead>
                        <tr>
                            <th>
                                <center>
                                    <input type="checkbox" id="select_all" value="">
                                </center>
                            </th>
                            <th>Witel</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no1 = 1;
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_wifiext_kelasa") or die(mysqli_error($con));
                            while($data = mysqli_fetch_array($sql)){ ?>
                                <td align="center">
                                    <input type="checkbox" name="checked[]" class="check"value="<?=$data['Witel']?>">
                                </td>
                                <td><?=$data['Witel']; ?></td>
                                <td><?=$data['Total']; ?></td>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <div class="box pull-right">
                    <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>
            </div>

        </form>
        <script>
        </script>
    </div>