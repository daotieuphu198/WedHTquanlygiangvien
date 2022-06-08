<form name="newdantoc" id="formreg" method="post" action="./elements/mdantoc/dantocact.php?reqact=addnew">
    <div id="divtg">
        <table class="table">
            <tr>
                <td>Dân Tộc : </td>
                <td><input type="text" name="tendt"  placeholder="TÊN DÂN TỘC " id="ms" /><br/></td>
                <td><input type="submit" id="btnsubmit" value="Tạo mới" /></td>
                <span id="ms-erro" class="erro"></span>
            <br/>
            </tr>
            
        </table>
        
    </div>
</form>

<?php
require './elements/mod/dt_cls.php';
?>
<h3>DANH SÁCH DÂN TỘC : </h3>
<div class="ds-dantoc">
    <?php
    $obj_dantoc = new dantoc();
    $list_dantoc = $obj_dantoc->DTGetAll();
    $l = count($list_dantoc);
    ?>
    <p>Trong trường có <b><?php echo $l; ?></b> dantoc </p>
    <?php
    if ($l > 0) {
        ?>
    <table border="1" class="table-list">
            <thead>
                <tr>
                    <th>MS</th>
                    <th>TÊN DÂN TỘC</th>
                    <th>LỰA CHỌN</th>
    <!--                    <th>Hoạt động</th>
                    <th>Xóa</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_dantoc as $v) {
                    ?>
                    <tr>
                        <td><?php echo $v->MSDT; ?></td>
                        <td><?php echo $v->TENDT; ?></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                                ?>
                                <a href="./elements/mdantoc/dantocact.php?reqact=deletedantoc&MSDT=<?php echo $v->MSDT; ?>">
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
                    <tempdantoc class="btnupdate" value="<?php echo $v->MSDT; ?>">
                        <img height="20px" class="iconimg" src="./img/update.png" />
                    </tempdantoc>
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


