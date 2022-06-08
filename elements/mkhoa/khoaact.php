<?php

session_start();
require '../../elements/mod/k_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $TENKHOA = $_POST['tenk'];

            $khoa = new khoa();
            $rs = $khoa->KAdd($TENKHOA);
            if ($rs) {
                header('location:../../index.php?req=khoaview&result=ok');
            } else {
                header('location:../../index.php?req=khoaview&result=notok');
            }
            break;
        case 'deletekhoa':
            $MSKHOA = $_GET['MSKHOA'];
            $khoa = new khoa();
            $rs = $khoa->KDelete($MSKHOA);
            if ($rs) {
                header('location:../../index.php?req=khoaview&result=ok');
            } else {
                header('location:../../index.php?req=khoaview&result=notok');
            }
            break;

        case 'updatekhoa':
            $MSKHOA = $_POST['MSKHOA'];
            $TENKHOA = $_POST['TENKHOA'];
            
            $khoa = new khoa();
            $rs = $khoa->khoaUpdate($TENKHOA, $MSKHOA);
            if ($rs) {
                header('location:../../index.php?req=khoaview&result=ok');
            } else {
                header('location:../../index.php?req=khoaview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=khoaview');
            break;
    }
}