<?php

session_start();
require '../../elements/mod/cmnv_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $LOAITRINHDO = $_POST['tentd'];
            $HOCVI = $_POST['tenhv'];

            $chuyenmon_nghiepvu = new chuyenmonnghiepvu();
            $rs = $chuyenmon_nghiepvu->CMNVAdd($LOAITRINHDO, $HOCVI);
            if ($rs) {
                header('location:../../index.php?req=cmnvview&result=ok');
            } else {
                header('location:../../index.php?req=cmnvview&result=notok');
            }
            break;
        case 'deletecmnv':
            $MS = $_GET['MS'];
            $cmnv = new chuyenmonnghiepvu();
            $rs = $cmnv->CMNVDelete($MS);
            if ($rs) {
                header('location:../../index.php?req=cmnvview&result=ok');
            } else {
                header('location:../../index.php?req=cmnvview&result=notok');
            }
            break;

        case 'updatecmnv':
            $MS = $_POST['MS'];
            $LOAITRINHDO = $_POST['LOAITRINHDO'];
            $HOCVI = $_POST['HOCVI'];
        
//            echo $MS;
//            echo $HOCVI;
//            echo $LOAITRINHDO;
            $cmnv = new chuyenmonnghiepvu();
            $rs = $cmnv->CMNVUpdate($LOAITRINHDO, $HOCVI, $MS);
            if ($rs) {
                header('location:../../index.php?req=cmnvview&result=ok');
            } else {
                header('location:../../index.php?req=cmnvview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=cmnvview');
    }
}