<div class="mid">Quản lý người dùng</div>
<hr>
<div class="title_user">Người dùng mới</div>
<div>
    <form name="newuser" id="formreg" method="post" action="./elements/mUser/userAct.php?reqact=addnew">
        <table class="table">
            <tr>
                <td>Tên đăng nhập:</td>
                <td><input type="text" name="username" /></td>
            </tr>
            <tr>
                <td>Mật khẩu:</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>Họ tên:</td>
                <td><input type="text" name="hoten" /></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
                <td><input type="reset" value="Làm lại" /><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>

<hr />
<?php
require './elements/mod/userCls.php';
?>
<div class="mid">Danh sách người dùng</div>
<div class="content_user">
    <?php
    $obj_User = new user();
    $list_User = $obj_User->UserGetAll();
    $l = count($list_User);
    ?>
    <p>Trong bảng có <b><?php echo $l; ?></b></p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1"class="table-list">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Họ tên</th>
                    <th><img height="20px" class="iconimg" src="img/unlock.jpg " />Hoạt động<img height="20px" class="iconimg" src="img/lock.jpg " /></th>
                    <th>Lựa Chọn</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_User as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->iduser; ?></td>
                        <td><?php echo $v->username; ?></td>
                        <td><?php echo $v->password; ?></td>
                        <td><?php echo $v->hoten; ?></td>
                        <td align="center">
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                if ($v->ability == 0) {
                                    ?>
                                    <a href="./elements/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>
                                       &ability=<?php echo $v->ability; ?>">
                                        <img class="iconimg" src="img/lock.png" />
                                    </a>
                                    <?php
                                } else {
                                    ?>
                                    <a href="./elements/mUser/userAct.php?reqact=setlock&iduser=<?php echo $v->iduser; ?>
                                       &ability=<?php echo $v->ability; ?>">
                                        <img height="20px" class="iconimg" src="img/unlock.jpg " />
                                    </a>
                                    <?php
                                }
                            } else {
                                if ($v->ability == 0) {
                                    ?>
                                    <img height="20px" class="iconimg" src="img/lock.jpg" />
                                    <?php
                                } else {
                                    ?>
                                    <img height="20px" class="iconimg" src="img/unlock.jpg" />
                                    <?php
                                }
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mUser/userAct.php?reqact=deleteuser&iduser=<?php echo $v->iduser; ?>">
                                    <img height="20px" class="iconimg" src="./img/delete.png" />
                                </a>
                                <?php
                            } else {
                                ?>
                                <img height="20px" class="iconimg" src="./img/lock3.png" />
                                <?php
                            }
                            ?>

                            <?php
                            if (isset($_SESSION['USER']) and $v->username == 'admin') {
                                ?>
                                <img height="20px" class="iconimg" src="./img/update.png" />
                                <?php
                            } else {
                                ?>
                    <temps class="btnupdate" value="<?php echo $v->iduser; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </temps>
                    <?php
                }
                ?>
                </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <?php
    }
    ?>
</div>