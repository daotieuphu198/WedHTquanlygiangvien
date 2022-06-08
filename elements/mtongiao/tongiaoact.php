<?php

session_start();
require '../../elements/mod/tg_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $TENTG = $_POST['tentg'];

            $ton_giao = new tongiao();
            $rs = $ton_giao->TGAdd($TENTG);
            if ($rs) {
                header('location:../../index.php?req=tongiaoview&result=ok');
            } else {
                header('location:../../index.php?req=tongiaoview&result=notok');
            }
            break;
        case 'deletetongiao':
            $MSTG = $_GET['MSTG'];
            $tongiao = new tongiao();
            $rs = $tongiao->TGDelete($MSTG);
            if ($rs) {
                header('location:../../index.php?req=tongiaoview&result=ok');
            } else {
                header('location:../../index.php?req=tongiaoview&result=notok');
            }
            break;
        case 'updatetongiao':
            $MSTG = $_POST['MSTG'];
            $TENTG = $_POST['TENTG'];

            $tongiao = new tongiao();
            $rs = $tongiao->TGUpdate($TENTG, $MSTG);
            if ($rs) {
                header('location:../../index.php?req=tongiaoview&result=ok');
            } else {
                header('location:../../index.php?req=tongiaoview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=tongiaoview');
    }
}