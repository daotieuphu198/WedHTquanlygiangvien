<?php

session_start();
require '../../elements/mod/hh_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $TENHH = $_POST['tenhh'];

            $hoc_ham = new hocham();
            $rs = $hoc_ham->HHAdd($TENHH);
            if ($rs) {
                header('location:../../index.php?req=hochamview&result=ok');
            } else {
                header('location:../../index.php?req=hochamview&result=notok');
            }
            break;
        case 'deletehocham':
            $MAHH = $_GET['MAHH'];
            $hocham = new hocham();
            $rs = $hocham->HHDelete($MAHH);
            if ($rs) {
                header('location:../../index.php?req=hochamview&result=ok');
            } else {
                header('location:../../index.php?req=hochamview&result=notok');
            }
            break;
        case 'updatehocham':
            $MAHH = $_POST['MAHH'];
            $TENHH = $_POST['TENHH'];

            $hocham = new hocham();
            $rs = $hocham->HHUpdate($TENHH, $MAHH);
            if ($rs) {
                header('location:../../index.php?req=hochamview&result=ok');
            } else {
                header('location:../../index.php?req=hochamview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=hochamview');
    }
}