<?php include_once('../../header.php') ?>
    <div class="box">
        <h1 text-align="center">DATA REAL TREG4</h1>
        <h4>
            Data Real Wifi EXT
            <style>
                h1{margin: auto; width: 400px;}
                .box{margin-bottom: 20px;}
            </style>
            <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
        <form method="post" name="proses">
            <div class="table-responsive">
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_wifiext">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_wifiext_treg4") or die(mysqli_error($con));
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
                Data Real PLC
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_wifiext">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_wifiext_treg4") or die(mysqli_error($con));
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
                Data Real OTT
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_ott">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_ott_treg4") or die(mysqli_error($con));
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
                Data Real Game
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_game">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_game_treg4") or die(mysqli_error($con));
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
                Data Real Musik
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_musik">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_musik_treg4") or die(mysqli_error($con));
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
                Data Real Benefit Game
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_benefit">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_benefit_treg4") or die(mysqli_error($con));
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
                Data Real Game + Benefit Game
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_gameplusbenefit">
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
                            $sql = mysqli_query($con, "SELECT tb_real_game_treg4.Witel, SUM(tb_real_game_treg4.Total) AS ") or die(mysqli_error($con));
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
                Data Real Indibox WMS
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_indiboxwms">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_indiboxwms_treg4") or die(mysqli_error($con));
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
                Data Real Indibox OTT
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_indiboxott">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_indiboxott_treg4") or die(mysqli_error($con));
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
                Data Real Indibox SALES
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_indibox">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_indibox_treg4") or die(mysqli_error($con));
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
                Data Real IHSmart Sales
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_ihssmartsales">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_ihssamrtsales_treg4") or die(mysqli_error($con));
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
                <!--SALES Gameqoo-->
                <br>
                <br>
                <h4>
                Data Real Gameqoo
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_treg4_gameqoo">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_gameqoo_treg4") or die(mysqli_error($con));
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