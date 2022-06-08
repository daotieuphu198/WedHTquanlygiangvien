<form name="newhocham" id="formreg" method="post" action="./elements/mhocham/hochamact.php?reqact=addnew">
    <div id="divtg">
        <table>
            <tr>
                <td>HỌC HÀM : </td>
                <td><input type="text" name="tenhh"  placeholder="TÊN HỌC HÀM " id="ms" /><br/></td>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
            <span id="ms-erro" class="erro"></span>
            <br/>
            </tr>

        </table>

    </div>
</form>


<?php
require './elements/mod/hh_cls.php';
?>
<h3>DANH SÁCH HỌC HÀM : </h3>
<div class="ds-hocham">
    <?php
    $obj_hocham = new hocham();
    $list_hocham = $obj_hocham->HHGetAll();
    $l = count($list_hocham);
    ?>
    <p>Trong trường có <b><?php echo $l; ?></b> học hàm </p>
    <?php
    if ($l > 0) {
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>MS</th>
                    <th>TÊN HỌC HÀM</th>
                    <th>LỰA CHỌN</th>
    <!--                    <th>Hoạt động</th>
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_hocham as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->MAHH; ?></td>
                        <td><?php echo $v->TENHH; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mhocham/hochamact.php?reqact=deletehocham&MAHH=<?php echo $v->MAHH; ?>">
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
                    <temphocham class="btnupdate" value="<?php echo $v->MAHH; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </temphocham>
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
