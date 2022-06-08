<?php

if (isset($_GET['req'])) {
    $request = $_GET['req'];
    switch ($request) {
        case 'add':
            require './elements/mgiangvien/add.php';
            break;
        case 'list':
            require './elements/mgiangvien/list.php';
            break;
        case 'dantocview':
            require './elements/mdantoc/dantocview.php';
            break;
        case 'tongiaoview':
            require './elements/mtongiao/tongiaoview.php';
            break;
        case 'hochamview':
            require './elements/mhocham/hochamview.php';
            break;
        case 'khoaview':
            require './elements/mkhoa/khoaview.php';
            break;
        case 'tinhocview':
            require './elements/mtinhoc/tinhocview.php';
            break;
        case 'ngoainguview':
            require './elements/mngoaingu/ngoainguview.php';
            break;
        case 'cmnvview':
            require './elements/mchuyenmonnghiepvu/cmnvview.php';
            break;
        case 'UserView':
            require './elements/mUser/UserView.php';
            break;
        case 'updateuser':
            require './elements/mUser/userUpdate.php';
            break;
        
          case 'giangvienupdate':
            require './elements/mgiangvien/giangvienupdate.php';
            break;
    }
} else {
    require './elements/default.php';
}
?>