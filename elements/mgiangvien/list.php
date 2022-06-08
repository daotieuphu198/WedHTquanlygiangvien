<?php
require './elements/mod/k_cls.php';
?>
<?php
$obj_khoa = new khoa();
$list_khoa = $obj_khoa->KGetAll();


?>
<h3>DANH SÁCH GIẢNG VIÊN : </h3>
<div class="ds-giangvien">
    <?php
    require './elements/mod/gv_cls.php';
    ?>
    <?php
    $obj_gv = new giangvien();
    $list_gv = $obj_gv->GVGetAll();
    $l = count($list_gv);
    ?>
    <p>Trong bảng có <b><?php echo $l; ?></b> giảng viên</p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1"class="table-list">
            <thead>
                <tr>
                    <th><img class="iconimg" title="MÃ SỐ GIẢNG VIÊN" src="img/id.png" /></th>
                    <th>KHOA</th>
                    <th>TRÌNH ĐỘ</th>
                    <th>NGOẠI NGỮ</th>
                    <th>TIN HỌC</th>
                    <th>HỌC HÀM</th>
                    <th>DÂN TỘC</th>
                    <th>TÔN GIÁO</th>                   
                    <th>TÊN G.V</th>
                    <th><img class="iconimg" height="20px" src="img/boy.png" /><img class="iconimg" height="20px" src="img/girl.png" /></th>
                    <th><img class="iconimg" title="NGÀY SINH" src="img/ngaysinh.png" /></th>
                    <th><img class="iconimg" title="EMAIL" src="img/email.png" /></th>
                    <th><img class="iconimg" title="SỐ ĐIỆN THOẠI" src="img/sdt.png" /></th>
                    <th><img class="iconimg" height="20px" src="img/cohuu.png" /><img class="iconimg" height="20px" src="img/thinhgiang.png" /></th>
                    <th><img class="iconimg" title="LƯƠNG" src="img/luong.png" /></th>
                    <th>LỰA CHỌN</th>
                    <!--                    
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_gv as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->magv; ?></td>

                        <td><?php echo $v->tenkhoa; ?></td>

                        <td><?php echo $v->hocvi; ?></td>
                        <td><?php echo $v->tdnn; ?></td>
                        <td><?php echo $v->tdth; ?></td>
                        <td><?php echo $v->tenhh; ?></td>
                        <td><?php echo $v->tendt; ?></td>
                        <td><?php echo $v->tentg; ?></td>

                        <td><?php echo $v->tengv; ?></td>
                        <td align="center">
                            <?php
                            if ($v->gioitinh == 0) {
                                ?>
                                <img class="iconimg" height="20px" src="img/girl.png" />
                                <?php
                            } else {
                                ?>
                                <img class="iconimg" height="20px" src="img/boy.png" />
                                <?php
                            }
                            ?></td>
                        <td><?php echo $v->ngaysinh; ?></td>
                        <td><?php echo $v->email; ?></td>
                        <td><?php echo $v->sdt; ?></td>
                        <td align="center">
                            <?php
                            if ($v->loaigiangvien == 0) {
                                ?>
                                <img class="iconimg" height="20px" title="GIÁO VIÊN CƠ HỮU" src="img/cohuu.png" />
                                <?php
                            } else {
                                ?>
                                <img class="iconimg" height="20px" title="GIÁO VIÊN THỈNH GIẢNG" src="img/thinhgiang.png" />
                                <?php
                            }
                            ?></td>
                        <td><?php echo $v->luong; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mgiangvien/giangvienact.php?reqact=deletegiangvien&MAGV=<?php echo $v->magv; ?>">
                                    <img height="20px" class="iconimg" src="./img/delete2.png" />
                                </a>
                                <?php
                            } else {
                                ?>
                                <img height="20px" class="iconimg" src="./img/lock3.png" />
                                <?php
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['ADMIN']) and $v->tengv == 'admin') {
                                ?>
                                <img class="iconimg" src="./img/update2.png" />
                                <?php
                            } else {
                                ?>
                    <tempgv class="btnupdate" value="<?php echo $v->magv; ?>">
                        <img class="iconimg" src="./img/update2.png" />
                    </tempgv>
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