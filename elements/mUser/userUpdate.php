<div class="mid">Cập nhật người dùng</div>
<?php
require '../mod/userCls.php';
$iduser = $_GET['iduser'];
$user = new user();
$getuser = $user->UserGetbyId($iduser);
?>
<div class="title_user">Người dùng mới</div>
<div class="content_user">
    <form name="updateuser" id="formupdate" method="post" action="./elements/mUser/userAct.php?reqact=updateuser">
        <input type="hidden" name="iduser" value="<?php echo $iduser; ?>"/>
        <table>
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username" value="<?php echo $getuser->username; ?>"/></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password" value="<?php echo $getuser->password; ?>"/></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="hoten" value="<?php echo $getuser->hoten; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>