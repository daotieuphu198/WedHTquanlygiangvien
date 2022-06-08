<div class="mid">Cập nhật Giảng Viên</div>
<?php
//giang vien
require '../mod/gv_cls.php';
$MAGV = $_GET['magv'];
$giangvien = new giangvien();
$getgiangvien = $giangvien->GVGetbyId($MAGV);
//khoa
require '../mod/k_cls.php';
$obj_khoa = new khoa();
$list_khoa = $obj_khoa->KGetAll();
//chuyenmonnghiepvu
require '../mod/cmnv_cls.php';
$obj_chuyenmonnghiepvu = new chuyenmonnghiepvu();
$list_chuyenmonnghiepvu = $obj_chuyenmonnghiepvu->CMNVGetAll();
//tin hoc
require '../mod/th_cls.php';
$obj_tinhoc = new tinhoc();
$list_tinhoc = $obj_tinhoc->THGetAll();
//ngoai ngu
require '../mod/nn_cls.php';
$obj_ngoaingu = new ngoaingu();
$list_ngoaingu = $obj_ngoaingu->NNGetAll();
//hoc ham
require '../mod/hh_cls.php';
$obj_hocham = new hocham();
$list_hocham = $obj_hocham->HHGetAll();
//dan toc
require '../mod/dt_cls.php';
$obj_dantoc = new dantoc();
$list_dantoc = $obj_dantoc->DTGetAll();
//ton giáo
require '../mod/tg_cls.php';
$obj_tongiao = new tongiao();
$list_tongiao = $obj_tongiao->TGGetAll();
?>
<div class="title_mod"><img class="iconimg" src="./img/update2.png"/>Cập nhật Thông Tin Giảng Viên</div>
<div class="content_user">
    <form name="updategiangvien" id="formupdate" method="post" enctype="multipart/form-data"
          action="./elements/mgiangvien/giangvienAct.php?reqact=updategiangvien">
        <input type="hidden" name="MAGV" value="<?php echo $MAGV; ?>"/>
        <table>
            <div class="box-area-right">
                <!-- khoa -->    
               
                <br/>
                <label>Khoa</label>
                <select name="MSKHOA" id="choose">
                    <?php
                    foreach ($list_khoa as $v) {
                        ?>
                        <option id="info1" value="<?php echo $v->MSKHOA; ?>"><?php echo $v->TENKHOA; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br/>
                <!-- chuyen mon nghiep vu -->
                <br/>
                <label>TRÌNH ĐỘ CHUYÊN MÔN</label>
                <br/>
                <select name="ma1" id="choose">
                    <?php
                    foreach ($list_chuyenmonnghiepvu as $v) {
                        ?>
                        <option value="<?php echo $v->MS; ?>"> <?php echo $v->LOAITRINHDO; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br/>
                <select name="MS" id="choose">
                    <?php
                    foreach ($list_chuyenmonnghiepvu as $v) {
                        ?>
                        <option value="<?php echo $v->MS; ?>"><?php echo $v->HOCVI; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br/>
                <!-- tin hoc -->
                <label>TIN HỌC</label>


                <select name="MSTH" id="choose">
                    <?php
                    foreach ($list_tinhoc as $v) {
                        ?>
                        <option value="<?php echo $v->MSTH; ?>"><?php echo $v->TDTH; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br/>
                <!-- ngoai ngu -->
                <label>NGOẠI NGỮ</label>
                <select name="MANN" id="choose">
                    <?php
                    foreach ($list_ngoaingu as $v) {
                        ?>
                        <option value="<?php echo $v->MANN; ?>"><?php echo $v->TDNN; ?></option>
                        <?php
                    }
                    ?>
                </select> <br/>
                <!-- hoc ham -->


                <label>Học Hàm</label>

                <select name="MAHH" id="choose">
                    <?php
                    foreach ($list_hocham as $v) {
                        ?>
                        <option value="<?php echo $v->MAHH; ?>" > <?php echo $v->TENHH; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br/>
                <!--///////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <!-- dan toc -->
                <label>Dân Tộc</label>


                <select name="MSDT" id="choose">
                    <?php
                    foreach ($list_dantoc as $v) {
                        ?>
                        <option value="<?php echo $v->MSDT; ?>"><?php echo $v->TENDT; ?></option>
                        <?php
                    }
                    ?>
                </select> <br/>

                <!-- ton giao -->
                <label>Tôn Giáo</label>


                <select name="MSTG" id="choose">
                    <?php
                    foreach ($list_tongiao as $v) {
                        ?>
                        <option value="<?php echo $v->MSTG; ?>"><?php echo $v->TENTG; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br/>           
            </div>
            <div class="box-area-left">
                <span id="email-erro" class="erro"></span>
                <br/>

                <label>Ngày sinh</label>
                <input type="date" id="ns" name="NGAYSINH"  value="<?php echo $getgiangvien->NGAYSINH; ?>" max="2000-12-30" min="1950-01-01" />
                <span id="ns-erro" class="erro"></span>
                <br/>
                <br/>

                <label>Số Điện Thoại</label>
                <input type="text" name="SDT" value="<?php echo $getgiangvien->SDT; ?>" id="SDT" />
                <span id="SDT-erro" class="erro"></span>
                <br/>

                <br/>

                <label>Giới tính</label>
                <input type="radio" name="GIOITINH" <?php if ($getgiangvien->GIOITINH == 1) echo 'checked'; ?> id="male" value="1" /> Nam
                <input type="radio" name="GIOITINH" <?php if ($getgiangvien->GIOITINH == 0) echo 'checked'; ?> id="famale" value="0" /> Nữ
                <span id="gender-erro" class="erro"></span>
                <br/>                    <br/>
            
                <br/>       <h3>NHẬP THÔNG TIN CÁ NHÂN</h3>

                <label>Họ và Tên</label>
                <input type="text" name="TENGV" value="<?php echo $getgiangvien->TENGV; ?>" id="fullname" />
                <span id="fullname-erro" class="erro"></span>
                <br/>

                <label>Địa chỉ mail</label>
                <input type="text" name="EMAIL" value="<?php echo $getgiangvien->EMAIL; ?>" id="mail" />
                <span id="email-erro" class="erro"></span>
                <br/>

                <label>Ngày sinh</label>
                <input type="date" id="ns" name="NGAYSINH"  value="<?php echo $getgiangvien->NGAYSINH; ?>" max="2000-12-30" min="1950-01-01" />
                <span id="ns-erro" class="erro"></span>
                <br/>
                <br/>

                <label>Số Điện Thoại</label>
                <input type="text" name="SDT" value="<?php echo $getgiangvien->SDT; ?>" id="SDT" />
                <span id="SDT-erro" class="erro"></span>
                <br/>

                <br/>

                <label>Giới tính</label>
                <input type="radio" name="GIOITINH" <?php if ($getgiangvien->GIOITINH == 1) echo 'checked'; ?> id="male" value="1" /> Nam
                <input type="radio" name="GIOITINH" <?php if ($getgiangvien->GIOITINH == 0) echo 'checked'; ?> id="famale" value="0" /> Nữ
                <span id="gender-erro" class="erro"></span>
                <br/>                    <br/>
            
                <br/>
            </div>
        </table>

        <input type="submit" id="btnsubmit" value="Cật nhật"/>
        <button onClick="window.location.reload();">cancel</button><b id="noteForm"></b>


    </form>
</div>
