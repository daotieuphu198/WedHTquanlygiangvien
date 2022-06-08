<div class="mid">Cập nhật Dân Tộc</div>
<?php
require '../mod/dt_cls.php';
$MSDT = $_GET['MSDT'];
$dantoc = new dantoc();
$getdantoc = $dantoc->DTGetbyId($MSDT)
?>
<div class="title_user">Dân Tộc Mới</div>
<div class="content_user">
    <form name="updatedantoc" id="formupdate" method="post" action="./elements/mdantoc/dantocact.php?reqact=updatedantoc">
        <input type="hidden" name="MSDT" value="<?php echo $MSDT; ?>"/>
        <table>
            <tr>
                <td>Tên Dân Tộc:</td>
                <td><input type="text" name="TENDT" value="<?php echo $getdantoc->TENDT; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>