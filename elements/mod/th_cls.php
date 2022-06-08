<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class tinhoc extends Database {

    public function THGetAll() {
        $getAll = $this->connect->prepare("select * from tinhoc");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function THAdd($TDTH) {
        $add = $this->connect->prepare("INSERT INTO tinhoc(TDTH) VALUES (?)");

        $add->execute(array($TDTH));
        return $add->rowCount();
    }

    public function THGetbyId($MSTH) {
        $getTK = $this->connect->prepare("select * from tinhoc where MSTH=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSTH));

        return $getTK->fetch();
    }

    public function THUpdate($TDTH, $MSTH) {
        $update = $this->connect->prepare("UPDATE tinhoc SET TDTH = ? WHERE MSTH = ?");

        $update->execute(array($TDTH, $MSTH));

        return $update->rowCount();
    }

    public function THDelete($MSTH) {
        $del = $this->connect->prepare("delete from tinhoc where MSTH=?");

        $del->execute(array($MSTH));

        return $del->rowCount;
    }

}
