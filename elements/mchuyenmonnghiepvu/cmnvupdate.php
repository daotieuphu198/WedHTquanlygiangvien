<div class="mid">Cập nhật chuyên môn nghiệp vụ</div>
<?php
require '../mod/cmnv_cls.php';
$MS = $_GET['MS'];
$cmnv = new chuyenmonnghiepvu();
$getcmnv = $cmnv->CMNVGetbyId($MS)
?>
<div class="title_user">Chuyên môn nghiệp vụ Mới</div>
<div class="content_user">
    <form name="updatecmnv" id="formupdate" method="post" action="./elements/mchuyenmonnghiepvu/cmnvact.php?reqact=updatecmnv">
        <input type="hidden" name="MS" value="<?php echo $MS; ?>"/>
        <table>
            <tr>
                <td>Tên Chuyên môn nghiệp vụ:</td>
                <td><input type="text" name="LOAITRINHDO" value="<?php echo $getcmnv->LOAITRINHDO; ?>"/><br/></td>
            
                <td>Học VỊ</td>
                <td><input type="text" name="HOCVI" value="<?php echo $getcmnv->HOCVI; ?>"/></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Cật nhật"/></td>
                <td><input type="reset" value="Làm lại"/><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>