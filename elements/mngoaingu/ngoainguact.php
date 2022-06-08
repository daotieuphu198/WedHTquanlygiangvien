<?php

session_start();
require '../../elements/mod/nn_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $TDNN = $_POST['tennn'];

            $ngoai_ngu = new ngoaingu();
            $rs = $ngoai_ngu->NNAdd($TDNN);
            if ($rs) {
                header('location:../../index.php?req=ngoainguview&result=ok');
            } else {
                header('location:../../index.php?req=ngoainguview&result=notok');
            }
            break;
        case 'deletengoaingu':
            $MANN = $_GET['MANN'];
            $ngoaingu = new ngoaingu();
            $rs = $ngoaingu->NNDelete($MANN);
            if ($rs) {
                header('location:../../index.php?req=ngoainguview&result=ok');
            } else {
                header('location:../../index.php?req=ngoainguview&result=notok');
            }
            break;
        case 'updatengoaingu':
            $MANN = $_POST['MANN'];
            $TDNN = $_POST['TDNN'];

            $ngoaingu = new ngoaingu();
            $rs = $ngoaingu->NNUpdate($TDNN, $MANN);
            if ($rs) {
                header('location:../../index.php?req=ngoainguview&result=ok');
            } else {
                header('location:../../index.php?req=ngoainguview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=ngoainguview');
    }
}