<?php

session_start();
require '../../elements/mod/gv_cls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            $MSKHOA = $_POST['MSKHOA'];
            $MS = $_POST['MS'];
            $MSTH = $_POST['MSTH'];
            $MANN = $_POST['MANN'];
            $MAHH = $_POST['MAHH'];
            $MSDT = $_POST['MSDT'];
            $MSTG = $_POST['MSTG'];
            $TENGV = $_POST['TENGV'];
            $EMAIL = $_POST['EMAIL'];
            $NGAYSINH = $_POST['NGAYSINH'];
            $SDT = $_POST['SDT'];
            $GIOITINH = $_POST['GIOITINH'];
            $LOAIGIANGVIEN = $_POST['LOAIGIANGVIEN'];
            $LUONG = $_POST['LUONG'];
            $giangvien = new giangvien();
            $rs = $giangvien->GVAdd($MSKHOA, $MS, $MSTH, $MANN, $MAHH, $MSDT, $MSTG, $TENGV, $GIOITINH, $NGAYSINH, $EMAIL, $SDT, $LUONG, $LOAIGIANGVIEN);
            if ($rs) {
                header('location:../../index.php?req=add&result=ok');
            } else {
                header('location:../../index.php?req=add&result=notok');
            }
            break;
        case 'deletegiangvien':
            $MAGV = $_GET['MAGV'];
            $giangvien = new giangvien();
            $rs = $giangvien->GVDelete($MAGV);

            if ($rs) {
                header('location:../../index.php?req=list&result=ok');
            } else {
                header('location:../../index.php?req=list&result=notok');
            }
            break;
        case 'updategiangvien':
            $MAGV = $_POST['MAGV'];
            $MSKHOA = $_POST['MSKHOA'];
            $MS = $_POST['MS'];
            $MSTH = $_POST['MSTH'];
            $MANN = $_POST['MANN'];
            $MAHH = $_POST['MAHH'];
            $MSDT = $_POST['MSDT'];
            $MSTG = $_POST['MSTG'];
            $TENGV = $_POST['TENGV'];
            $GIOITINH = $_POST['GIOITINH'];
            $NGAYSINH = $_POST['NGAYSINH'];
            $EMAIL = $_POST['EMAIL'];
            $SDT = $_POST['SDT'];
            $LUONG = $_POST['LUONG'];
            $LOAIGIANGVIEN = $_POST['LOAIGIANGVIEN'];


            $giangvien = new giangvien();
            $rs = $giangvien->GVUpdate($MSKHOA, $MS, $MSTH, $MANN, $MAHH, $MSDT, $MSTG, $TENGV, $GIOITINH, $NGAYSINH, $EMAIL, $SDT, $LUONG, $LOAIGIANGVIEN, $MAGV);
            if ($rs) {
                header('location:../../index.php?req=list&result=ok');
            } else {
                header('location:../../index.php?req=list&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=add');
    }
}