<form name="newngoaingu" id="formreg" method="post" action="./elements/mngoaingu/ngoainguact.php?reqact=addnew">
    <div id="divtg">
        <table class="table">
            <tr>
                <td>NGOẠI NGỮ: </td>
                <td><input type="text" name="tennn"  placeholder="TÊN NGOẠI NGỮ " id="ms" /><br/></td>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
            <span id="ms-erro" class="erro"></span>
            <br/>
            </tr>

        </table>

    </div>
</form>

<?php
require './elements/mod/nn_cls.php';
?>
<h3>DANH SÁCH NGOẠI NGỮ : </h3>
<div class="ds-ngoaingu">
    <?php
    $obj_ngoaingu = new ngoaingu();
    $list_ngoaingu = $obj_ngoaingu->NNGetAll();
    $l = count($list_ngoaingu);
    ?>
    <p>Trong trường có <b><?php echo $l; ?></b> học hàm </p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1" class="table-list">
            <thead>
                <tr>
                    <th>MS</th>
                    <th>TÊN NGOẠI NGỮ</th>
                    <th>LỰA CHỌN</th>
    <!--                    <th>Hoạt động</th>
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_ngoaingu as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->MANN; ?></td>
                        <td><?php echo $v->TDNN; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mngoaingu/ngoainguact.php?reqact=deletengoaingu&MANN=<?php echo $v->MANN; ?>">
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
                    <tempngoaingu class="btnupdate" value="<?php echo $v->MANN; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </tempngoaingu>
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
