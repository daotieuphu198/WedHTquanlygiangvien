<div class="mid">Cập nhật Tôn Giáo</div>
<?php
require '../mod/tg_cls.php';
$MSTG = $_GET['MSTG'];
$tongiao = new tongiao();
$gettongiao = $tongiao->TGGetbyId($MSTG)
?>
<div class="title_user">Tôn Giáo Mới</div>
<div class="content_user">
    <form name="updatetongiao" id="formupdate" method="post" action="./elements/mtongiao/tongiaoact.php?reqact=updatetongiao">
        <input type="hidden" name="MSTG" value="<?php echo $MSTG; ?>"/>
        <table>
            <tr>
                <td>Tên Tôn Giáo:</td>
                <td><input type="text" name="TENTG" value="<?php echo $gettongiao->TENTG; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>