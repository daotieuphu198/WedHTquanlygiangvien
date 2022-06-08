<div id="menu-top">
    <div class="cateOrder">
        <ul>
            <li><a href="#">MENU</a></li>
            <li><a href="index.php?req=list" title="DANH SÁCH GIẢNG VIÊN" >DANH SÁCH G.V</a></li>

        </ul>
    </div>
    <div class="itemOrder">
        <ul>

            <li><a href="index.php?req=add" title="THÊM GIẢNG VIÊN" >THÊM G.V</a></li>
            <li><a href="index.php?req=khoaview" title="THÊM KHOA" >KHOA</a></li>
            <li><a href="index.php?req=dantocview" title="THÊM DÂN TỘC" >DÂN TỘC</a></li>
            <li><a href="index.php?req=tongiaoview" title="THÊM TÔN GIÁO" >TÔN GIÁO</a></li>
            <li><a href="index.php?req=hochamview" title="THÊM HỌC HÀM" >HỌC HÀM</a></li>
            <li><a href="index.php?req=tinhocview" title="THÊM TIN HỌC" >TIN HỌC</a></li>
            <li><a href="index.php?req=ngoainguview" title="THÊM NGOẠI NGỮ" >NGOẠI NGỮ</a></li>
            <li><a href="index.php?req=cmnvview" title="THÊM CHUYÊN MÔN NGHIỆP VỤ" >CHUYÊN MÔN</a></li>
            <li><a href="index.php?req=UserView" title="TRANG CHỦ" class="atv">USER</a></li>



        </ul>
    </div>
</div>
<style>
    #menu-top ul
    {
        margin: 0px;
        padding: 0px;
        position: fixed;

    }
    #menu-top ul li
    {
        list-style: none;
        float: left;

    }
    #menu-top ul li a
    {
        text-decoration: none;
        background-image: linear-gradient(green, #A5E5EF);
        display: block;
        height: 40px;
        line-height: 40px;
        color: azure;
        padding: 0px 20px 0px 20px;
        border-right: 2px double #000000;

    }
    #menu-top ul li a:hover
    {
        box-shadow: 0 5px 50px 0 #15f4ee inset, 0 5px 50px 0 #9cf18d,
            0 5px 50px 0 black inset, 0 5px 50px 0 black;
        text-shadow: 0 0 5px #15f4ee, 0 0 5px #15f4ee; 
        animation: animate 5s linear infinite;
    }
    @keyframes animate {
        100%{
            filter: hue-rotate(360deg);
        }
    }
    #menu-top ul li a.atv
    {
        background: #E90FD9;
    }</style>