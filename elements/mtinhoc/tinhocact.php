<?php

session_start();
require '../../elements/mod/th_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $TDTH = $_POST['tenth'];

            $tin_hoc = new tinhoc();
            $rs = $tin_hoc->THAdd($TDTH);
            if ($rs) {
                header('location:../../index.php?req=tinhocview&result=ok');
            } else {
                header('location:../../index.php?req=tinhocview&result=notok');
            }
            break;
        case 'deletetinhoc':
            $MSTH = $_GET['MSTH'];
            $tinhoc = new tinhoc();
            $rs = $tinhoc->THDelete($MSTH);
            if ($rs) {
                header('location:../../index.php?req=tinhocview&result=ok');
            } else {
                header('location:../../index.php?req=tinhocview&result=notok');
            }
            break;
        case 'updatetinhoc':
            $MSTH = $_POST['MSTH'];
            $TDTH = $_POST['TDTH'];

            $tinhoc = new tinhoc();
            $rs = $tinhoc->THUpdate($TDTH, $MSTH);
            if ($rs) {
                header('location:../../index.php?req=tinhocview&result=ok');
            } else {
                header('location:../../index.php?req=tinhocview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=tinhocview');
    }
}