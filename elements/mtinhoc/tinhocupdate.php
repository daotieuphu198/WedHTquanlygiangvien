<div class="mid">Cập nhập tin học </div>
<?php
require '../mod/th_cls.php';
$MSTH = $_GET['MSTH'];
$tinhoc = new tinhoc();
$gettinhoc = $tinhoc->THGetbyId($MSTH)
?>
<div class="title_user">Tin Học Mới</div>
<div class="content_user">
    <form name="updatetinhoc" id="formupdate" method="post" action="./elements/mtinhoc/tinhocact.php?reqact=updatetinhoc">
        <input type="hidden" name="MSTH" value="<?php echo $MSTH; ?>"/>
        <table>
            <tr>
                <td>Tên Tin Học:</td>
                <td><input type="text" name="TDTH" value="<?php echo $gettinhoc->TDTH; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>