<form name="newkhoa" id="formreg" method="post" action="./elements/mkhoa/khoaact.php?reqact=addnew">
    <div id="divtg">
        <table class="table">
            <tr>
                <td>KHOA : </td>
                <td><input type="text" name="tenk"  placeholder="TÊN KHOA " id="ms" /><br/></td>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
            <span id="ms-erro" class="erro"></span>
            <br/>
            </tr>

        </table>

    </div>
</form>
<?php
require './elements/mod/k_cls.php';
?>
<h3>DANH SÁCH KHOA : </h3>
<div class="ds-khoa">
    <?php
    $obj_khoa = new khoa();
    $list_khoa = $obj_khoa->KGetAll();
    $l = count($list_khoa);
    ?>
    <p>Trong trường có <b><?php echo $l; ?></b> khoa </p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1" class="table-list">
            <thead>
                <tr>
                    <th>MS</th>
                    <th>TÊN KHOA</th>
                    <th>LỰA CHỌN</th>
    <!--                    <th>Hoạt động</th>
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_khoa as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->MSKHOA; ?></td>
                        <td><?php echo $v->TENKHOA; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mkhoa/khoaact.php?reqact=deletekhoa&MSKHOA=<?php echo $v->MSKHOA; ?>">
                                    <img height="20px" class="iconimg" src="./img/delete.png" />
                                </a>
                                <?php
                            } else {
                                ?>
                                <img height="20px" class="iconimg" src="./img/delete.png" />
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
                    <tempkhoa class="btnupdate" value="<?php echo $v->MSKHOA; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </tempkhoa>
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

