<?php

$s = '../../elements/mod/database.php';
if (file_exists($s)) {
    $f = $s;
} else {
    $f = './elements/mod/database.php';
}
require_once $f;

class ngoaingu extends Database {

    public function NNGetAll() {
        $getAll = $this->connect->prepare("select * from ngoaingu");
        $getAll->setFetchMode(PDO::FETCH_OBJ);
        $getAll->execute();

        return $getAll->fetchAll();
    }

    public function NNAdd($TDNN) {
        $add = $this->connect->prepare("INSERT INTO ngoaingu(TDNN) VALUES (?)");

        $add->execute(array($TDNN));
        return $add->rowCount();
    }

    public function NNGetbyId($MANN) {
        $getTK = $this->connect->prepare("select * from ngoaingu where MANN=?");
        $getTK->setFetchMode(PDO::FETCH_OBJ);
        $getTK->execute(array($MANN));

        return $getTK->fetch();
    }

    public function NNUpdate($TDNN, $MANN) {
        $update = $this->connect->prepare("UPDATE ngoaingu SET TDNN = ? WHERE MANN = ?");

        $update->execute(array($TDNN, $MANN));

        return $update->rowCount();
    }

    public function NNDelete($MANN) {
        $del = $this->connect->prepare("delete from ngoaingu where MANN=?");

        $del->execute(array($MANN));

        return $del->rowCount;
    }

}
