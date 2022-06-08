<form name="newtinhoc" id="formreg" method="post" action="./elements/mtinhoc/tinhocact.php?reqact=addnew">
    <div id="divtg">
        <table class="table">
            <tr>
                <td>TIN HỌC: </td>
                <td><input type="text" name="tenth"  placeholder="TÊN TIN HỌC " id="ms" /><br/></td>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
            <span id="ms-erro" class="erro"></span>
            <br/>
            </tr>

        </table>

    </div>
</form>


<?php
require './elements/mod/th_cls.php';
?>
<h3>DANH SÁCH TIN HỌC : </h3>
<div class="ds-tinhoc">
    <?php
    $obj_tinhoc = new tinhoc();
    $list_tinhoc = $obj_tinhoc->THGetAll();
    $l = count($list_tinhoc);
    ?>
    <p>Trong trường có <b><?php echo $l; ?></b> tinhoc </p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1" class="table-list">
            <thead>
                <tr>
                    <th>MS</th>
                    <th>TÊN TIN HỌC</th>
                    <th>LỰA CHỌN</th>
    <!--                    <th>Hoạt động</th>
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_tinhoc as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->MSTH; ?></td>
                        <td><?php echo $v->TDTH; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mtinhoc/tinhocact.php?reqact=deletetinhoc&MSTH=<?php echo $v->MSTH; ?>">
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
                    <temptinhoc class="btnupdate" value="<?php echo $v->MSTH; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </temptinhoc>
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


