   <?php

session_start();
require '../../elements/mod/userCls.php';
if (isset($_GET['reqact'])) {
    $requsetAction = $_GET['reqact'];
    switch ($requsetAction) {
        case 'addnew':
            //xử lý thêm
            $username = $_POST['username'];
            $password = $_POST['password'];
            $hoten = $_POST['hoten'];
            $user = new user();
            $rs = $user->UserAdd($username, $password, $hoten);
            if ($rs) {
                header('location:../../index.php?req=userview&result=ok');
            } else {
                header('location:../../index.php?req=userview&result=notok');
            }
            break;
        default:
            header('location:../../index.php?req=userview');

        case 'deleteuser':
            $iduser = $_GET['iduser'];
            $user = new user();
            $rs = $user->UserDelete($iduser);
            if ($rs) {
                header('location:../../index.php?req=userview&result=ok');
            } else {
                header('location:../../index.php?req=userview&result=notok');
            }
            break;

        case 'setlock':
            $iduser = $_GET['iduser'];
            $ability = $_GET['ability'];
            $user = new user();
            if ($ability == 0) {
                $rs = $user->UserSetActtive($iduser, 1);
            } else {
                $rs = $user->UserSetActtive($iduser, 0);
            }
            if ($rs) {
                header('location:../../index.php?req=userview&result=ok');
            } else {
                header('location:../../index.php?req=userview&result=notok');
            }
            break;

        case 'updateuser':


            $username = $_POST['username'];
            $password = $_POST['password'];
            $hoten = $_POST['hoten'];
            $iduser = $_POST['iduser'];
            $user = new user();
            $rs = $user->UserUpdate($username, $password, $hoten, $iduser);
            if ($rs) {
                header('location:../../index.php?req=userview&result=ok');
            } else {
                header('location:../../index.php?req=userview&result=notok');
            }
            break;
        case 'checklogin':
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = new user();

            $rs = $user->UserCheckLogin($username, $password);
            if ($rs) {
                if ($username == "admin") {
                    $_SESSION['ADMIN'] = $username;
                } else {
                    $_SESSION['USER'] = $username;
                }
                header('location:../../index.php?req=userview&result=ok');
            } else {
                header('location:../../index.php?req=userview&result=notok');
            }
            break;
        case 'userlogout':
            $timelogin = date('h:i - d/m/y');
            if (isset($_SESSION['USER'])) {
                $namelogin = $_SESSION['USER'];
            }
            if (isset($_SESSION['ADMIN'])) {
                $namelogin = $_SESSION['ADMIN'];
            }
            setcookie($namelogin, $timelogin, time() + (86400 * 30), "/");

            session_destroy();
            header('location:../../index.php?');
            break;
    }
}
