<div class="mid">Cập nhật Học Hàm</div>
<?php
require '../mod/hh_cls.php';
$MAHH = $_GET['MAHH'];
$hocham = new hocham();
$gethocham = $hocham->HHGetbyId($MAHH)
?>
<div class="title_user">Học Hàm Mới</div>
<div class="content_user">
    <form name="updatehocham" id="formupdate" method="post" action="./elements/mhocham/hochamact.php?reqact=updatehocham">
        <input type="hidden" name="MAHH" value="<?php echo $MAHH; ?>"/>
        <table>
            <tr>
                <td>Tên Học Hàm:</td>
                <td><input type="text" name="TENHH" value="<?php echo $gethocham->TENHH; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>