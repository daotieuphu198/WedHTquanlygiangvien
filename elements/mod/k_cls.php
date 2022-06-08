<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class khoa extends Database {

    public function KGetAll() {
        $getAll = $this->connect->prepare("select * from khoa");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function KAdd($TENKHOA) {
        $add = $this->connect->prepare("INSERT INTO khoa(TENKHOA) VALUES (?)");

        $add->execute(array($TENKHOA));
        return $add->rowCount();
    }

    public function KGetbyId($MSKHOA) {
        $getTK = $this->connect->prepare("select * from khoa where MSKHOA=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSKHOA));

        return $getTK->fetch();
    }

    public function KDelete($MSKHOA) {
        $del = $this->connect->prepare("delete from khoa where MSKHOA=?");

        $del->execute(array($MSKHOA));

        return $del->rowCount;
    }

    public function khoaUpdate($TENKHOA, $MSKHOA) {
        $update = $this->connect->prepare("UPDATE khoa SET TENKHOA = ? WHERE MSKHOA = ?");

        $update->execute(array($TENKHOA, $MSKHOA));

        return $update->rowCount();
    }

}
