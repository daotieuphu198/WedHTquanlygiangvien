<div class="mid">Cập nhật Ngoại Ngữ</div>
<?php
require '../mod/nn_cls.php';
$MANN = $_GET['MANN'];
$ngoaingu = new ngoaingu();
$getngoaingu = $ngoaingu->NNGetbyId($MANN)
?>
<div class="title_user">Ngoại Ngữ Mới</div>
<div class="content_user">
    <form name="updatengoaingu" id="formupdate" method="post" action="./elements/mngoaingu/ngoainguact.php?reqact=updatengoaingu">
        <input type="hidden" name="MANN" value="<?php echo $MANN; ?>"/>
        <table>
            <tr>
                <td>Tên Ngoại Ngữ:</td>
                <td><input type="text" name="TDNN" value="<?php echo $getngoaingu->TDNN; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>