<?php include_once('../header.php') ?>
    <div class="box">
        <h1 text-align="center">WITEL MATH</h1>
        <h4>
            <small>Silahkan Pilih Menu Yang Ada Dibawah Ini</small>
            <style>
                h1{margin: auto; width: 400px;}
            </style>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
        </h4>
        <form method="post" name="proses">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Tambahkan Data Real
                    <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="<?=base_url('Addon/data_real_best_sales/data_real_treg4.php')?>">Data Real Best Sales TREG4</a></li>
                            <li><a href="<?=base_url('Addon/data_real_best_sales/data_real_bestwitel.php')?>">Data Real Best Sales Best Kelas A WITEL</a></li>
                            <li><a href="<?=base_url('Addon/data_real_bestdigitalproduct/data_real_treg4.php')?>">Data Real Best Sales Digital TREG4</a></li>
                            <li><a href="<?=base_url('Addon/data_real_bestdigitalproduct/data_real_bestwitel.php')?>">Data Real Best Sales Digital Best WITEL</a></li>
                        </ul>
            </div>
        </form>
    </div>