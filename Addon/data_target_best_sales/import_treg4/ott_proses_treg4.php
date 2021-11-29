<?php
require_once "../../../config/config.php";
require "../../../asset/libs/vendor/autoload.php";
include "excel_reader2.php";
// require "../asset/libs/vendor/phpexcel/Classes/PHPExcel.php";


use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Reader\Csv;
    use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$uuid = Uuid::uuid4()->toString();

if(isset($_POST['import'])){

    $file_mimes = array('application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    $koneksi = mysqli_connect('localhost','root','','dummy');
    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {
    
        $arr_file = explode('.', $_FILES['file']['name']);
        $extension = end($arr_file);
    
        if('csv' == $extension) {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
        } else {
            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
    
        $spreadsheet = $reader->load($_FILES['file']['tmp_name']);
        $uuid4 = Uuid::uuid4()->toString();
        $sheetData = $spreadsheet->getActiveSheet()->toArray();
        echo "<script>console.log('$sheetData')</script>";
        for($i = 1;$i < count($sheetData);$i++)
        {
            $no = $sheetData[$i]['0'];
            $witel = $sheetData[$i]['1'];
            $januari = $sheetData[$i]['2'];
            $februari = $sheetData[$i]['3'];
            $maret = $sheetData[$i]['4'];
            $april = $sheetData[$i]['5'];
            $mei = $sheetData[$i]['6'];
            $juni = $sheetData[$i]['7'];
            $juli = $sheetData[$i]['8'];
            $agustus = $sheetData[$i]['9'];
            $september = $sheetData[$i]['10'];
            $oktober = $sheetData[$i]['11'];
            $november = $sheetData[$i]['12'];
            $desember = $sheetData[$i]['13'];
            $FY_2021 = $sheetData[$i]['14'];
            mysqli_query($koneksi,"INSERT INTO tb_target_ott_treg4(nomor,Witel,Januari,Febuari,Maret,April,Mei,Juni,Juli,Agustus,September,Oktober,November,Desember,FY_2021) values ('$no','$witel','$januari','$februari','$maret','$april','$mei','$juni','$juli','$agustus','$september','$oktober','$november','$desember','$FY_2021')");
        }
        header("Location: ../data_target_treg4.php"); 
    }
}
?>