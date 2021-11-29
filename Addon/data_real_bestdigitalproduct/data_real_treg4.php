<?php include_once('../../header.php') ?>
    <div class="box">
        <h1 text-align="center">DATA REAL WITEL TREG4</h1>
        <h4>
            Data Real Minipack
            <style>
                h1{margin: auto; width: 500px;}
                .box{margin-bottom: 20px;}
            </style>
            <div class="pull-right">
            <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
            </div>
        </h4>
        <form method="post" name="proses">
            <div class="table-responsive">
                <table class="table table-stripped table-bordered table-hover" id="real_minipack_treg4">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_minipack_treg4") or die(mysqli_error($con));
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
                Data Real STB Tambahan
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_stbtambahan_treg4">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_stbtambahan_treg4") or die(mysqli_error($con));
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
                Data Real Upgrade Speed
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_upgradespeed_treg4">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_upgradespeed_kelasa") or die(mysqli_error($con));
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
                Data Real Migrasi 2P 3P
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_migrasi2p3p_treg4">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_migrasi2p3p_treg4") or die(mysqli_error($con));
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
                Data Real Migrasi 1P 2P
                    <div class="pull-right">
                        <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                        <a href="" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-import"></i> Import Data</a>
                    </div>
                </h4>
                <table class="table table-stripped table-bordered table-hover" id="real_migrasi1p2p_treg4">
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
                            $sql = mysqli_query($con, "SELECT * FROM tb_real_migrasi1p2p_treg4") or die(mysqli_error($con));
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