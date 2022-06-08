 <form name="newgiangvien" id="formreg" method="post" action="./elements/mgiangvien/giangvienact.php?reqact=addnew">
    <div id="divtg">
        <table class="table">
            <tr>
            <div class="box-area-right">

                <div class="tt-giangvien">
                    <h3>NHẬP THÔNG TIN NGHỆP VỤ</h3>
                    <br/>
                    <?php
                    require './elements/mod/k_cls.php';
                    ?>
                    <label>Khoa</label>
                    <?php
                    $obj_khoa = new khoa();
                    $list_khoa = $obj_khoa->KGetAll();
                    ?>

                    <select name="MSKHOA" id="choose">
                        <?php
                        foreach ($list_khoa as $v) {
                            ?>
                            <option value="<?php echo $v->MSKHOA; ?>"><?php echo $v->TENKHOA; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <br/>
                    <?php
                    require './elements/mod/cmnv_cls.php';
                    ?>
                    <label>TRÌNH ĐỘ CHUYÊN MÔN</label>
                    <?php
                    $obj_chuyenmonnghiepvu = new chuyenmonnghiepvu();
                    $list_chuyenmonnghiepvu = $obj_chuyenmonnghiepvu->CMNVGetAll();
                    ?>

                    <select name="ma1" id="choose">
                        <?php
                        foreach ($list_chuyenmonnghiepvu as $v) {
                            ?>

                            <option value="<?php echo $v->MS; ?>"> <?php echo $v->LOAITRINHDO; ?></option>
                            <?php
                        }
                        ?>
                    </select>
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
                    <?php
                    require './elements/mod/th_cls.php';
                    ?>
                    <label>TIN HỌC</label>
                    <?php
                    $obj_tinhoc = new tinhoc();
                    $list_tinhoc = $obj_tinhoc->THGetAll();
                    ?>

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
                    <!-- ******************************************************************  -->
                    <?php
                    require './elements/mod/nn_cls.php';
                    ?>
                    <label>NGOẠI NGỮ</label>
                    <?php
                    $obj_ngoaingu = new ngoaingu();
                    $list_ngoaingu = $obj_ngoaingu->NNGetAll();
                    ?>

                    <select name="MANN" id="choose">
                        <?php
                        foreach ($list_ngoaingu as $v) {
                            ?>
                            <option value="<?php echo $v->MANN; ?>"><?php echo $v->TDNN; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <br/>
                    <br/>
                    <!-- ****************************************************************** -->                   
                    <br/> 
                    <?php
                    require './elements/mod/hh_cls.php';
                    ?>
                    <label>Học Hàm</label>
                    <?php
                    $obj_hocham = new hocham();
                    $list_hocham = $obj_hocham->HHGetAll();
                    ?>


                    <?php
                    foreach ($list_hocham as $v) {
                        ?>
                        <input name="MAHH" type="radio" value="<?php echo $v->MAHH; ?>" /> <?php echo $v->TENHH; ?>
                        <?php
                    }
                    ?>

                    <br/>

                    <?php
                    require './elements/mod/dt_cls.php';
                    ?>
                    <label>Dân Tộc</label>
                    <?php
                    $obj_dantoc = new dantoc();
                    $list_dantoc = $obj_dantoc->DTGetAll();
                    ?>

                    <select name="MSDT" id="choose">
                        <?php
                        foreach ($list_dantoc as $v) {
                            ?>
                            <option value="<?php echo $v->MSDT; ?>"><?php echo $v->TENDT; ?></option>
                            <?php
                        }
                        ?>
                    </select>

                    <?php
                    require './elements/mod/tg_cls.php';
                    ?>
                    <label>Tôn Giáo</label>
                    <?php
                    $obj_tongiao = new tongiao();
                    $list_tongiao = $obj_tongiao->TGGetAll();
                    ?>

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
            </div>
            <div class="box-area-left">

                <div class="tt-giangvien">
                    <h3>NHẬP THÔNG TIN CÁ NHÂN</h3>

                    <label>Họ và Tên</label>
                    <input type="text" name="TENGV" placeholder="HỌ VÀ TÊN GIẢNG VIÊN" id="fullname" />
                    <span id="fullname-erro" class="erro"></span>
                    <br/>

                    <label>Địa chỉ mail</label>
                    <input type="text" name="EMAIL" placeholder="MAIL GIẢNG VIÊN" id="mail" />
                    <span id="email-erro" class="erro"></span>
                    <br/>

                    <label>Ngày sinh</label>
                    <input type="date" id="ns" name="NGAYSINH" max="2000-12-30" min="1950-01-01" />
                    <span id="ns-erro" class="erro"></span>
                    <br/>
                    <br/>

                    <label>Số Điện Thoại</label>
                    <input type="text" name="SDT" placeholder="LIÊN HỆ CỦA GIẢNG VIÊN" id="SDT" />
                    <span id="SDT-erro" class="erro"></span>
                    <br/>

                    <br/>

                    <label>Giới tính</label>
                    <input type="radio" name="GIOITINH" id="male" value="1" /> Nam
                    <input type="radio" name="GIOITINH" id="famale" value="0" /> Nữ
                    <span id="gender-erro" class="erro"></span>
                    <br/>                    <br/>
                    <label>Loại G.V</label>
                    <input type="radio" name="LOAIGIANGVIEN" id="loaigv" value="1" /> Cơ Hữu
                    <input type="radio" name="LOAIGIANGVIEN" id="loaigv" value="0" /> Thỉnh Giảng
                    <span id="loai-erro" class="erro"></span>
                    <br/>
                    <label>LƯƠNG</label>
                    <input type="text" name="LUONG" placeholder="LƯƠNG GIÁO VIÊN ĐƯƠC HƯỞNG" id="luong" />
                    <span id="luong-erro" class="erro"></span>
                    <br/>



                </div>
            </div>
            <button class="btn" onclick="save()">LƯU LẠI</button>
            <br/>

            </tr>

        </table>

    </div>

</form>
