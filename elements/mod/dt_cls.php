<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class dantoc extends Database {

    public function DTGetAll() {
        $getAll = $this->connect->prepare("select * from dantoc");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function DTAdd($TENDT) {
        $add = $this->connect->prepare("INSERT INTO dantoc(TENDT) VALUES (?)");

        $add->execute(array($TENDT));
        return $add->rowCount();
    }

    public function DTGetbyId($MSDT) {
        $getTK = $this->connect->prepare("select * from dantoc where MSDT=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSDT));

        return $getTK->fetch();
    }

    public function DTUpdate($TENDT, $MSDANTOC) {
        $update = $this->connect->prepare("UPDATE dantoc SET TENDT = ? WHERE MSDT = ?");

        $update->execute(array($TENDT, $MSDANTOC));

        return $update->rowCount();
    }

    public function DTDelete($MSDT) {
        $del = $this->connect->prepare("delete from dantoc where MSDT=?");

        $del->execute(array($MSDT));

        return $del->rowCount;
    }

}
