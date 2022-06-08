<?php

session_start();
require '../../elements/mod/dt_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $TENDT = $_POST['tendt'];

            $dan_toc = new dantoc();
            $rs = $dan_toc->DTAdd($TENDT);
            if ($rs) {
                header('location:../../index.php?req=dantocview&result=ok');
            } else {
                header('location:../../index.php?req=dantocview&result=notok');
            }
            break;
        case 'deletedantoc':
            $MSDT = $_GET['MSDT'];
            $dantoc = new dantoc();
            $rs = $dantoc->DTDelete($MSDT);
            if ($rs) {
                header('location:../../index.php?req=dantocview&result=ok');
            } else {
                header('location:../../index.php?req=dantocview&result=notok');
            }
            break;
        case 'updatedantoc':
            $MSDT = $_POST['MSDT'];
            $TENDT = $_POST['TENDT'];

            $dantoc = new dantoc();
            $rs = $dantoc->DTUpdate($TENDT, $MSDT);
            if ($rs) {
                header('location:../../index.php?req=dantocview&result=ok');
            } else {
                header('location:../../index.php?req=dantocview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=dantocview');
    }
}