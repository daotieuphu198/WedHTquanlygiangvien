<form name="newncmnv" id="formreg" method="post" enctype="multipart/form-data" action="./elements/mchuyenmonnghiepvu/cmnvact.php?reqact=addnew">
    <div id="divtg">
        <table class="table">
            <tr>
                <td>CHUYÊN MÔN NGHIỆP VỤ : </td>
                <td><input type="text" name="tentd"  placeholder="TRÌNH ĐỘ CHUYÊN MÔN  " id="ms" /><br/></td>
                <td><input type="text" name="tenhv"  placeholder="HỌC VỊ  " id="ms" /><br/></td>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
            <span id="ms-erro" class="erro"></span>
            <br/>
            </tr>

        </table>

    </div>
</form>

<?php
require './elements/mod/cmnv_cls.php';
?>
<h3>DANH SÁCH CHUYÊN MÔN NGHIỆP VỤ : : </h3>
<div class="ds-cmnv">
    <?php
    $obj_cmnv = new chuyenmonnghiepvu();
    $list_cmnv = $obj_cmnv->CMNVGetAll();
    $l = count($list_cmnv);
    ?>
    <p>Trong trường có <b><?php echo $l; ?></b> </p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1" class="table-list">
            <thead>
                <tr>
                    <th>MS</th>
                    <th>TÊN CHUYÊN MÔN NGHIỆP VỤ :</th>
                    <th>HỌC VỊ :</th>
                    <th>LỰA CHỌN</th>
    <!--                    <th>Hoạt động</th>
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_cmnv as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->MS; ?></td>
                        <td><?php echo $v->LOAITRINHDO; ?></td>
                        <td><?php echo $v->HOCVI; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mchuyenmonnghiepvu/cmnvact.php?reqact=deletecmnv&MS=<?php echo $v->MS; ?>">
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
                    <tempchuyenmonnghiepvu class="btnupdate" value="<?php echo $v->MS; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </tempchuyenmonnghiepvu>
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

