<div class="mid">Cập nhật Khoa</div>
<?php
require '../mod/k_cls.php';
$MSKHOA = $_GET['MSKHOA'];
$khoa = new khoa();
$getkhoa = $khoa->KGetbyId($MSKHOA)
?>
<div class="title_user">Khoa Mới</div>
<div class="content_user">
    <form name="updatekhoa" id="formupdate" method="post" action="./elements/mkhoa/khoaact.php?reqact=updatekhoa">
        <input type="hidden" name="MSKHOA" value="<?php echo $MSKHOA; ?>"/>
        <table>
            <tr>
                <td>Tên Khoa:</td>
                <td><input type="text" name="TENKHOA" value="<?php echo $getkhoa->TENKHOA; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>