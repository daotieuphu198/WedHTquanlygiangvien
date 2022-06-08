<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class hocham extends Database {

    public function HHGetAll() {
        $getAll = $this->connect->prepare("select * from hocham");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function HHAdd($TENHH) {
        $add = $this->connect->prepare("INSERT INTO hocham(TENHH) VALUES (?)");

        $add->execute(array($TENHH));
        return $add->rowCount();
    }

    public function HHGetbyId($MAHH) {
        $getTK = $this->connect->prepare("select * from hocham where MAHH=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MAHH));

        return $getTK->fetch();
    }

    public function HHUpdate($TENHH, $MAHH) {
        $update = $this->connect->prepare("UPDATE hocham SET TENHH = ? WHERE MAHH = ?");

        $update->execute(array($TENHH, $MAHH));

        return $update->rowCount();
    }

    public function HHDelete($MAHH) {
        $del = $this->connect->prepare("delete from hocham where MAHH=?");

        $del->execute(array($MAHH));

        return $del->rowCount;
    }

}
