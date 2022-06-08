<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class chuyenmonnghiepvu extends Database {

    public function CMNVGetAll() {
        $getAll = $this->connect->prepare("select * from chuyenmonnghiepvu");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function CMNVAdd($LOAITRINHDO, $HOCVI) {
        $add = $this->connect->prepare("INSERT INTO chuyenmonnghiepvu(LOAITRINHDO, HOCVI) VALUES (?,?)");

        $add->execute(array($LOAITRINHDO, $HOCVI));
        return $add->rowCount();
    }

    public function CMNVGetbyId($MS) {
        $getTK = $this->connect->prepare("select * from chuyenmonnghiepvu where MS=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MS));

        return $getTK->fetch();
    }

    public function KDelete($MS) {
        $del = $this->connect->prepare("delete from chuyenmonnghiepvu where MS=?");

        $del->execute(array($MS));

        return $del->rowCount;
    }

    public function CMNVUpdate($LOAITRINHDO, $HOCVI, $MS) {
        $update = $this->connect->prepare("UPDATE chuyenmonnghiepvu SET LOAITRINHDO = ? , HOCVI = ? WHERE MS = ?");

        $update->execute(array($LOAITRINHDO, $HOCVI, $MS));

        return $update->rowCount();
    }

}
