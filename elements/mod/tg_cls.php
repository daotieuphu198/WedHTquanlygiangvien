<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class tongiao extends Database {

    public function TGGetAll() {
        $getAll = $this->connect->prepare("select * from tongiao");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function TGAdd($TENTG) {
        $add = $this->connect->prepare("INSERT INTO tongiao(TENTG) VALUES (?)");

        $add->execute(array($TENTG));
        return $add->rowCount();
    }

    public function TGGetbyId($MSTG) {
        $getTK = $this->connect->prepare("select * from tongiao where MSTG=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MSTG));

        return $getTK->fetch();
    }

    public function TGUpdate($TENTG, $MSDANTOC) {
        $update = $this->connect->prepare("UPDATE tongiao SET TENTG = ? WHERE MSTG = ?");

        $update->execute(array($TENTG, $MSDANTOC));

        return $update->rowCount();
    }

    public function TGDelete($MSTG) {
        $del = $this->connect->prepare("delete from tongiao where MSTG=?");

        $del->execute(array($MSTG));

        return $del->rowCount;
    }

}
