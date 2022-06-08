<form name="newtongiao" id="formreg" method="post" action="./elements/mtongiao/tongiaoact.php?reqact=addnew">
    <div id="divtg">
        <table class="table">
            <tr>
                <td>Tôn Giáo : </td>
                <td><input type="text" name="tentg"  placeholder="TÊN TÔN GIÁO " id="ms" /><br/></td>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
            <span id="ms-erro" class="erro"></span>
            <br/>
            </tr>

        </table>

    </div>
</form>


<?php
require './elements/mod/tg_cls.php';
?>
<h3>DANH SÁCH TÔN GIÁO : </h3>
<div class="ds-tongiao">
    <?php
    $obj_tongiao = new tongiao();
    $list_tongiao = $obj_tongiao->TGGetAll();
    $l = count($list_tongiao);
    ?>
    <p>Trong trường có <b><?php echo $l; ?></b> tongiao </p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1"class="table-list">
            <thead>
                <tr>
                    <th>MS</th>
                    <th>TÊN TÔN GIÁO</th>
                    <th>LỰA CHỌN</th>
    <!--                    <th>Hoạt động</th>
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_tongiao as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->MSTG; ?></td>
                        <td><?php echo $v->TENTG; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mtongiao/tongiaoact.php?reqact=deletetongiao&MSTG=<?php echo $v->MSTG; ?>">
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
                    <temptongiao class="btnupdate" value="<?php echo $v->MSTG; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </temptongiao>
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



