<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class giangvien extends Database {

    public function GVGetAll() {
        $getAll = $this->connect->prepare("select magv, tenkhoa, hocvi, tdnn, tdth, tenhh, tendt, tentg, tengv, gioitinh, ngaysinh, email, sdt, loaigiangvien, luong".
                                            " from giangvien , khoa ,chuyenmonnghiepvu , tinhoc , ngoaingu , hocham , dantoc ,tongiao" .
                                            " where giangvien.mskhoa=khoa.mskhoa and giangvien.ms=chuyenmonnghiepvu.ms and giangvien.msth=tinhoc.msth and giangvien.mann=ngoaingu.mann and giangvien.mahh=hocham.mahh and giangvien.msdt=dantoc.msdt and giangvien.mstg=tongiao.mstg");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function GVAdd($MSKHOA, $MS, $MSTH, $MANN, $MAHH, $MSDT, $MSTG, $TENGV, $GIOITINH, $NGAYSINH, $EMAIL, $SDT, $LUONG, $LOAIGIANGVIEN) {
        $add = $this->connect->prepare("INSERT INTO giangvien(MSKHOA, MS, MSTH, MANN, MAHH, MSDT, MSTG ,TENGV, GIOITINH, NGAYSINH, EMAIL, SDT, LUONG, LOAIGIANGVIEN) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        $add->execute(array($MSKHOA, $MS, $MSTH, $MANN, $MAHH, $MSDT, $MSTG, $TENGV, $GIOITINH, $NGAYSINH, $EMAIL, $SDT, $LUONG, $LOAIGIANGVIEN));
        return $add->rowCount();
    }

    public function GVGetbyId($MAGV) {
        $getTK = $this->connect->prepare("select * from giangvien where MAGV=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MAGV));

        return $getTK->fetch();
    }

    public function GVGetbyIdCMVN($MS) {
        $getTK = $this->connect->prepare("select * from giangvien where MS=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MS));

        return $getTK->fetch();
    }

    public function GVGetbyIdDT($MSDT) {
        $getTK = $this->connect->prepare("select * from giangvien where MSDT=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSDT));

        return $getTK->fetch();
    }

    public function GVGetbyIdHH($MAHH) {
        $getTK = $this->connect->prepare("select * from giangvien where MAHH=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MAHH));

        return $getTK->fetch();
    }

    public function GVGetbyIdK($MSKHOA) {
        $getTK = $this->connect->prepare("select * from giangvien where MSKHOA=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSKHOA));

        return $getTK->fetch();
    }

    public function GVGetbyIdNN($MANN) {
        $getTK = $this->connect->prepare("select * from giangvien where MANN=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MANN));

        return $getTK->fetch();
    }

    public function GVGetbyIdTG($MSTG) {
        $getTK = $this->connect->prepare("select * from giangvien where MSTG=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSTG));

        return $getTK->fetch();
    }

    public function GVGetbyIdTH($MSTH) {
        $getTK = $this->connect->prepare("select * from giangvien where MSTH=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSTH));

        return $getTK->fetch();
    }

    public function GVDelete($MAGV) {
        $del = $this->connect->prepare("delete from giangvien where MAGV=?");

        $del->execute(array($MAGV));
        return $del->rowCount();
    }

    public function GVUpdate($MSKHOA, $MS, $MSTH, $MANN, $MAHH, $MSDT, $MSTG, $TENGV, $GIOITINH, $NGAYSINH, $EMAIL, $SDT, $LUONG, $LOAIGIANGVIEN, $MAGV) {
        $update = $this->connect->prepare("UPDATE giangvien SET "
                . "MSKHOA=?, MS=?, MSTH=?, MANN=?, MAHH=?, MSDT=?, MSTG=?, TENGV=?, GIOITINH=?, NGAYSINH=?, EMAIL=?, SDT=?, LUONG=?, LOAIGIANGVIEN=? "
                . "WHERE MAGV = ?");

        $update->execute(array($MSKHOA, $MS, $MSTH, $MANN, $MAHH, $MSDT, $MSTG, $TENGV, $GIOITINH, $NGAYSINH, $EMAIL, $SDT, $LUONG, $LOAIGIANGVIEN, $MAGV));

        return $update->rowCount();
    }

}

?>
