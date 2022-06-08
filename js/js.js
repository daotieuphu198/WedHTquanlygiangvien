$(document).ready(function () {
    //menu
    $(".itemOrder").hide();
    $(".cateOrder").click(function () {
        $(this).next().slideDown();
    });
    $(".itemOrder").mouseleave(function () {
        $(this).slideUp();
    });
    $("temps").click(function () {
        var iduser = $(this).attr("value");
        $("#bottom_inner").load("./elements/mUser/userUpdate.php?iduser=" + iduser);
    });
    $("tempkhoa").click(function () {
        var MSKHOA = $(this).attr("value");
        $("#bottom_inner").load("./elements/mkhoa/khoaupdate.php?MSKHOA=" + MSKHOA);
    });
    $("tempdantoc").click(function () {
        var MSDT = $(this).attr("value");
        $("#bottom_inner").load("./elements/mdantoc/dantocupdate.php?MSDT=" + MSDT);
    });
    $("temphocham").click(function () {
        var MAHH = $(this).attr("value");
        $("#bottom_inner").load("./elements/mhocham/hochamupdate.php?MAHH=" + MAHH);
    });
    $("tempchuyenmonnghiepvu").click(function () {
        var MS = $(this).attr("value");
        $("#bottom_inner").load("./elements/mchuyenmonnghiepvu/cmnvupdate.php?MS=" + MS);
    });
    $("tempngoaingu").click(function () {
        var MANN = $(this).attr("value");
        $("#bottom_inner").load("./elements/mngoaingu/ngoainguupdate.php?MANN=" + MANN);
    });
    $("temptinhoc").click(function () {
        var MSTH = $(this).attr("value");
        $("#bottom_inner").load("./elements/mtinhoc/tinhocupdate.php?MSTH=" + MSTH);
    });
    $("temptongiao").click(function () {
        var MSTG = $(this).attr("value");
        $("#bottom_inner").load("./elements/mtongiao/tongiaoupdate.php?MSTG=" + MSTG);
    });
    $("tempgv").click(function () {
        var magv = $(this).attr("value");
        $("#bottom_inner").load("./elements/mgiangvien/giangvienupdate.php?magv=" + magv);
    });


/////////////////////////////////////////////////////////////////////////




});
$(window).on('load', function (event) {
    $('body').removeClass('preloading');
    $('.load').delay(2000).fadeOut('low');
//	$('.loader').delay(1000).fadeOut('fast');
});
